<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\LockScreenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RankMahasiswaController;


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::put('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['throttle:6,1'])
        ->name('verification.send');
    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/lock-screen', [LockScreenController::class, 'showLockScreen'])->name('lock-screen');
    Route::post('/lock-screen', [LockScreenController::class, 'unlockScreen'])->name('unlock-screen');
    Route::middleware('lock.screen')->group(function () {
        Route::get('/home', fn() => view('index'))->name('home');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/password', [PasswordController::class, 'edit'])->name('password.edit');
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
    Route::get('/data-masters/users', [DataMasterController::class, 'users'])->name('data-masters.users');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Cluster
    Route::prefix('data-masters')->group(function () {
        Route::get('/clusters', [ClusterController::class, 'index'])->name('clusters.index');
        Route::get('/clusters/add', [ClusterController::class, 'create'])->name('clusters.create');
        Route::post('/clusters', [ClusterController::class, 'store'])->name('clusters.store');
        Route::get('/clusters/{id}/edit', [ClusterController::class, 'edit'])->name('clusters.edit');
        Route::put('/clusters/{id}', [ClusterController::class, 'update'])->name('clusters.update');
        Route::delete('/clusters/{id}', [ClusterController::class, 'destroy'])->name('clusters.destroy');
    });

    Route::prefix('clusters')->group(function () {
        Route::get('/clusters', [ClusterController::class, 'userIndex'])->name('user.clusters.index');
        Route::post('/clusters/join', [ClusterController::class, 'joinClass'])->name('user.clusters.join');
        Route::delete('/clusters/leave/{id}', [ClusterController::class, 'leaveClass'])->name('user.clusters.leave');
    });

    // Assignment
    Route::get('/data-masters/assignments', [AssignmentController::class, 'index'])->name('assignments.index');
    Route::get('/assignments/add', [AssignmentController::class, 'create'])->name('assignments.create');
    Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store');
    Route::get('/assignments/{id}/edit', [AssignmentController::class, 'edit'])->name('assignments.edit');
    Route::put('/assignments/{id}', [AssignmentController::class, 'update'])->name('assignments.update');
    Route::delete('/assignments/{id}', [AssignmentController::class, 'destroy'])->name('assignments.destroy');

    Route::get('/task/task-details/{id}', [AssignmentController::class, 'show'])->name('tasks.show');
    Route::get('/task/task-list', [AssignmentController::class, 'taskView'])->name('assignments.taskView');
    Route::get('/index', [AssignmentController::class, 'showTaskProgress'])->name('index');
    Route::get('/home', [AssignmentController::class, 'showTaskProgress'])->name('home');

    Route::post('/assignments/{id}/submit', [AssignmentController::class, 'submit'])->name('assignments.submit');

    // Submission Admin
    Route::get('/data-masters/submissions', [SubmissionController::class, 'index'])->name('submissions.index');
    Route::get('/submissions/add', [SubmissionController::class, 'create'])->name('submissions.create');
    Route::post('/submissions', [SubmissionController::class, 'store'])->name('submissions.store');
    Route::get('/submissions/{id}/edit', [SubmissionController::class, 'edit'])->name('submissions.edit');
    Route::put('/submissions/{id}', [SubmissionController::class, 'update'])->name('submissions.update');
    Route::delete('/submissions/{id}', [SubmissionController::class, 'destroy'])->name('submissions.destroy');

    // Submission User

    Route::post('/task/submissions', [SubmissionController::class, 'storeUser'])->name('user.submissions.store');
    Route::put('/task/submissions/{id}', [SubmissionController::class, 'updateUser'])->name('user.submissions.update');
    Route::delete('/task/submissions/{id}', [SubmissionController::class, 'destroyUser'])->name('user.submissions.destroy');

    // Comment
    Route::get('/data-masters/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::get('/comments/add', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

    // Prodi
    Route::get('/data-masters/prodis', [ProdiController::class, 'index'])->name('prodis.index');
    Route::get('/prodis/add', [ProdiController::class, 'create'])->name('prodis.create');
    Route::post('/prodis', [ProdiController::class, 'store'])->name('prodis.store');
    Route::get('/prodis/{id}/edit', [ProdiController::class, 'edit'])->name('prodis.edit');
    Route::put('/prodis/{id}', [ProdiController::class, 'update'])->name('prodis.update');
    Route::delete('/prodis/{id}', [ProdiController::class, 'destroy'])->name('prodis.destroy');

    // Announcement
    Route::get('/data-masters/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/data-masters/announcements/add', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/data-masters/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/data-masters/announcements/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/data-masters/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/data-masters/announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
    Route::get('/home', [AnnouncementController::class, 'latest'])->name('home');
    Route::get('/index', [AnnouncementController::class, 'latest'])->name('index');
    Route::get('/announcement/announcement-list', [AnnouncementController::class, 'list'])->name('announcements.list');
    Route::get('/announcement/announcement/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
    Route::get('/announcement/announcement/{id}', [AnnouncementController::class, 'showDetail'])->name('announcements.show');
    Route::get('/info-yuwa-detail/{id}', [AnnouncementController::class, 'showInfoYuwaDetail'])->name('announcements.info_yuwa_detail');



    // Rank
    Route::get('/rank/ranks', [RankMahasiswaController::class, 'index'])->name('rank.mahasiswa');
});
