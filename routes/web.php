<?php
use components\Route;
/*
 * Routes list
 * Route::\Method\('\url\', '\Controller\/\action');
 *  Method: Get, Post, Put, Patch, Delete
 *  Url: Request Url
 *  Controller: Controller for this Url
 *  Action: Calleble action of Controller
 *
 * Controllers reads from \contollers path
 *
 * Example: Route:post('/send/post/([0-9]+), 'MailController/send/$1');
 *  When use url your_site/send/post/23 calls MainController with send action
 *  and gives parametr 12 in this action
 */

Route::get('/', 'IndexController/home');
Route::get('/profile', 'IndexController/profile');


Route::get('/signin', 'IndexController/signin');
Route::get('/signup', 'IndexController/signup');
Route::get('/signout', 'UserController/signout');

Route::post('/signin', 'UserController/signin');
Route::post('/signup', 'UserController/signup');

/*
 * Api routes
 * get / -get first post
 * get /n -get n-post
 * get /posts/n get n-page per 10 posts on page
 * post /add add new post
 * put /n update n-post
 * delete /n delete n-post
 */

Route::get('api/', 'PostsApiController/getPost');
Route::get('api/(\d+)', 'PostsApiController/getPost/$1');
Route::get('api/posts/(\d+)', 'PostsApiController/getPosts/$1');
Route::post('api/add', 'PostsApiController/addPost');
Route::put('api/(\d+)', 'PostsApiController/updatePost/$1');
Route::delete('api/(\d+)', 'PostsApiController/deletePost/$1');

/*
 * Api routes end
 */



/*
 * Last route works when all routes is incorrect
 */
Route::last('IndexController/home');