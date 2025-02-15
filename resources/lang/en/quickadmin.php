<?php

return [
	'create' => 'Create',
	'save' => 'Save',
	'edit' => 'Edit',
	'view' => 'View',
	'update' => 'Update',
	'list' => 'List',
	'no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'logout' => 'Logout',
	'add_new' => 'Add new',
	'are_you_sure' => 'Are you sure?',
	'back_to_list' => 'Back to list',
	'dashboard' => 'Dashboard',
	'delete' => 'Delete',
	'quickadmin_title' => 'LaraQuiz',

	'user-management' => [
		'title' => 'User Management',
		'fields' => [],
	],

	'test' => [
		'new' => 'New Quiz',
	],

	'roles' => [
		'title' => 'Roles',
		'fields' => [
			'title' => 'Title',
		],
	],

	'users' => [
		'title' => 'Users',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],

	'user-actions' => [
		'title' => 'User actions',
		'fields' => [
			'user' => 'User',
			'action' => 'Action',
			'action-model' => 'Action model',
			'action-id' => 'Action id',
		],
	],
	'essay' => [
		'title' => 'essay',
		'fields' => [
			'topic' => 'Topic',
			'essay-text' => 'Essay text',
			'code-snippet' => 'Code snippet',
			'answer-explanation' => 'Answer explanation',
			'more-info-link' => 'More info link',
		],
	],
	'topics' => [
		'title' => 'Topics',
		'fields' => [
			'title' => 'Title',
		],
	],

	'questions' => [
		'title' => 'Questions',
		'fields' => [
			'topic' => 'Topic',
			'question-text' => 'Question text',
			'code-snippet' => 'Code snippet',
			'answer-explanation' => 'Answer explanation',
			'more-info-link' => 'More info link',
		],
	],

	'questions-options' => [
		'title' => 'Questions Options',
		'fields' => [
			'question' => 'question',
			'option' => 'Option',
			'correct' => 'Correct',
		],
	],

	'results' => [
		'title' => 'My Results',
		'fields' => [
			'user' => 'User',
			'question' => 'Question',
			'correct' => 'Correct',
			'date' => 'Date',
			'result' => 'Score',
		],
	],

	'laravel-quiz' => 'New Laravel Quiz',
	'quiz' => 'Answer these 10 questions. There\'s no time limit.',
	'submit_quiz' => 'Submit answers',
	'view-result' => 'View result',

];
