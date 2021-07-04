<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAuthenticate;
use App\TutorProfile;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('UserAuthenticate');
Route::get('/logout','HomeController@logout');

Route::get('/index', function() {

	return view('website.index');
});
Route::get('/about', function() {

	return view('website.about');
});

Route::get('/contact', function() {

	return view('website.contact');
});

Route::get('/courses', function() {

	return view('website.courses');
});

Route::get('/tutor', function() {

	return view('website.tutor');
});

Route::get('/faq', function() {

	return view('website.faq');
});

Route::get('/term-and-condition', function() {

	return view('website.term-and-condition');
});

Route::get('/404page', function() {

	return view('website.404page');
});

Route::get('/privacy-policy', function() {

	return view('website.privacy-policy');
});

//Routes for Admin Dashboard
Route::get('addashboard', 'AdminDashboardController@view_dashboard')->name('addashboard')->middleware('auth');
Route::get('ViewAllStudents', 'AdminDashboardController@student_details')->name('ViewAllStudents')->middleware('auth');

Route::get('ActionOnTutor', 'AdminDashboardController@tutor_details')->name('ActionOnTutor')->middleware('auth');
Route::get('tutorsection', function() {

	return view('admin.tutor.tutorsection');

});
/*Routes for Courses in admin dashboard*/
Route::get('AddCourse', 'AddCourseController@view_add_course')->name('AddCourse');
Route::POST('SubmitCourse', 'AddCourseController@add_course')->name('SubmitCourse');
Route::get('EditCourse/{id}', 'AddCourseController@edit_course')->name('EditCourse');
Route::PATCH('UpdateCourse/{id}', 'AddCourseController@update_course')->name('UpdateCourse');
Route::get('DeleteCourse/{id}', 'AddCourseController@delete_course')->name('DeleteCourse');
Route::get('ViewAllCourse', 'AddCourseController@view_all_course')->name('ViewAllCourse');



//Routes for Home
/*Route::get('Home', function() {

	return view('Home');
});*/

//Routes for Tutor Dashboard
Route::get('TutorDashboard', function(){

	return view('tutor.TutorDashboard');
});

/*Tutor Profile Routes */


Route::get('stripe', 'paymentController@stripe')->middleware('auth');
Route::post('stripe', 'paymentController@stripePost')->name('stripe.post')->middleware('auth');


Route::get('tutor-profile', 'TutorProfileController@profile')->middleware('auth');
Route::post('tutor-profile', 'TutorProfileController@update_avatar')->middleware('auth');
Route::get('tutor-profile', 'TutorProfileController@view_slots')->middleware('auth');

/* Student Profile*/
Route::get('student-profile/{id}', 'SearchController@student_profile')->name('student-profile')->middleware('auth');

/*Tutor Courses Routes*/
Route::get('register-course', 'TutorCourseController@view_add_course')->name('register-course');
Route::post('register-course/{id}', 'TutorCourseController@register_course')->name('register-course');
Route::get('registered-courses', 'TutorCourseController@view_course')->name('registered-courses');
Route::get('delete-course/{id}', 'TutorCourseController@delete_course')->name('delete-course');

/* Rooutes for tutor Meetings*/
Route::get('meetings/{id}', 'Zoom\MeetingController@view')->name('meetings');
Route::post('create-meetings', 'Zoom\MeetingController@create')->name('create-meetings')->middleware('auth');
Route::get('all-meetings/{id}','Zoom\MeetingController@tutor_list')->name('all-meetings')->middleware('auth');
Route::get('your-meetings/{id}','Zoom\MeetingController@student_list')->name('your-meetings')->middleware('auth');
/* All Students */

Route::get('enrolled-student/{id}', 'FriendRequestController@ShowStudent')->middleware('auth')->name('enrolled-student');

/* Tutor time slots routes*/
Route::get('slots-page', 'TimeSlotController@view_slots')->name('slots-page');
Route::POST('add-slots', 'TimeSlotController@add_time_slots')->name('add-slots');
Route::get('delete-slot/{id}', 'TimeSlotController@delete_slots')->name('delete-slot');

/* Tutor Assignments Route */

Route::POST('save-assignment', 'AssignmeentController@SaveAssignment')->name('save-assignment')->middleware('auth');

Route::get('upload-assignment/{id}', 'AssignmeentController@ViewAssignment')->name('upload-assignment')->middleware('auth'); 
Route::get('all-assignment/{id}','AssignmeentController@allAssignment')->name('all-assignment')->middleware('auth');
Route::get('edit-assignment/{id}', 'AssignmeentController@edit_assignment')->name('edit-assignment')->middleware('auth');
Route::POST('update-assignment/{id}', 'AssignmeentController@UpdateAssignment')->name('update-assignment')->middleware('auth');
Route::get('delete-assignment/{id}','AssignmeentController@deleteAssignment')->name('delete-assignment')->middleware('auth'); 



Route::get('submit-assignment', function(){

	return view('tutor.assignments.SubmitAssignments');
});

Route::get('student-request', function(){

	return view('tutor.request.request');
});


/*Student Dashboard Routes*/

Route::get('student-dashboard', 'StudentDashboardController@view')->middleware('auth');

Route::get('search-tutor', 'SearchController@index')->name('search-tutor')->middleware('auth');
Route::get('searching', 'SearchController@advance')->name('searching')->middleware('auth');

/*Student Profile Routes */

Route::get('student-profile', 'StudentProfieController@profile')->middleware('auth');
Route::post('student-profile', 'StudentProfieController@update_avatar')->middleware('auth');

/* Get Tutor Profile*/
Route::get('profile/{id}', 'SearchController@profile')->name('profile')->middleware('auth');
Route::get('tutor-profile/{id}', 'SearchController@tutor_profile')->name('tutor-profile')->middleware('auth');

/* Tutor Enrollment */
Route::get('send-request/{id}', 'FriendRequestController@SendRequest')->name('send-request')->middleware('auth');
Route::get('accept-request/{id}', 'FriendRequestController@AcceptRequest')->name('accept-request')->middleware('auth');
Route::get('delete-request/{id}', 'FriendRequestController@DeleteRequest')->name('delete-request')->middleware('auth');
Route::get('enrolled-show/{id}', 'FriendRequestController@ShowTutors')->middleware('auth')->name('enrolled-show');

/* Student Enrollment Courses */
Route::get('offer-course', 'StudentCourseController@offer_course')->name('offer-course');
Route::post('enroll-course/{id}', 'StudentCourseController@enroll_course')->name('enroll-course');
Route::get('enrolled-courses', 'StudentCourseController@view_enrolled_course')->name('enrolled-courses');
Route::get('delete-course/{id}', 'StudentCourseController@delete_course')->name('delete-course');


/* Student Assignments List*/
Route::get('your-assignment/{id}','AssignmeentController@Student_Assignment')->name('your-assignment')->middleware('auth');

Route::get('assignment-details/{id}', 'AssignmeentController@student_assignment_details')->name('assignment-details');


/* Routes for Messages*/


Route::get('chat', 'ChatsController@view')->name('chat')->middleware('auth');
Route::get('/message/{id}', 'ChatsController@getMessage')->name('message');
Route::post('message', 'ChatsController@sendMessage')->name('message');

