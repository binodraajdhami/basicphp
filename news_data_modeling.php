<!-- ================================
News Portal
================================

tbl_users
=========
- id
- name		string varchar(255)
- email		string varchar(255)
- username	string varchar(255)
- phone		integer
- password	string
- gender	string
- dob		date null
- status	boolean
- created_at	date and time
- updated_at	date and time
- last_login	date and time null
- image		string  null

tbl_cagetogries
==================
- id
- created_by	integer
- updated_by	integer
- name		string
- description 	text
- status	boolean
- rank 		integer
- image		string  null
- created_at	date and time
- updated_at	date and time

tbl_news
==================
- id
- category_id		integer
- title			string
- short_description 	text
- description 		text
- status		boolean
- thumbnail 		string  null
- created_by		integer
- updated_by		integer
- created_at		date and time
- updated_at		date and time -->