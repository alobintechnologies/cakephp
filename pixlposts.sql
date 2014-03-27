drop table users;
drop table user_meta;
drop table listings;
/**
 * This table holds the users, customers datas
 */
create table users (
    id bigint(20) unsigned auto_increment primary key,
    first_name varchar(100),
    last_name varchar(100),
    company varchar(500) default null,
    address varchar(500) default null,
    city varchar(200) default null,
    state varchar(200) default null,
    post_code varchar(100) default null,
    country varchar(200) default null,
    phone_number varchar(100) default null,
    email_address varchar(1000),
    user_name varchar(100),
    password varchar(500),
    url varchar(1000) default null,
    created_on datetime default null,
    modified_on datetime default null,
    created_by bigint(20) default null,
    last_modified_by bigint(20) default null,
    category_id bigint(20),
    user_type varchar(100),
    status int(20) default '1',
    last_login_date datetime default null
);

/**
 * This table contains the list of custom fields of user data
 */
create table user_meta (
    umeta_id bigint(20) unsigned auto_increment primary key,
    user_id bigint(20),
    meta_key varchar(255),
    meta_value longtext default null
);

/**
 * This is used for managing the listings/classifieds
 */
create table listings (
    listing_id bigint(20) unsigned auto_increment primary key,
    title varchar(1000),
    classified_type varchar(50),
    categories varchar(255),
    location varchar(500) default null,
    website varchar(1000) default null,
    video_url varchar(1000) default null,
    description longtext default null,
    sold char(10) default 'N',
    no_of_views bigint(20) default 0,
    short_desc text default null,
    status varchar(200),
    comment_count bigint(20) default 0,
    comment_status varchar(20) default 'Open',
    created_on datetime default null,
    created_by bigint(20) default null,
    last_modified_on datetime default null,
    last_modified_by bigint(20) default null
);

/**
 * This is used for custom fields in listing post type
 */
create table listing_meta (
    lmeta_id bigint(20) unsigned auto_increment primary key,
    listing_id bigint(20),
    meta_key varchar(255),
    meta_value longtext default null
);

/**
 * This table is used for managing the articles post type
 */
create table articles (
    article_id bigint(20) unsigned auto_increment primary key,
    title varchar(1000),
    categories varchar(255),
    meta_description varchar(1000),
    display_from datetime default null,
    short_desc text default null,
    content text default null,
    contact varchar(255) default null,
    email_address varchar(1000) default null,
    website varchar(1000) default null,
    featured_image blob default null,
    featured_image_title varchar(500),
    sponsor varchar(500),
    video_script text,
    status varchar(200),
    created_on datetime default null,
    created_by bigint(20) default null,
    last_modified_on datetime default null,
    last_modified_by bigint(20) default null
);

/**
 * This table manages the calendar datas
 */
create table calendars (
    calendar_id bigint(20) unsigned auto_increment primary key,
    title varchar(1000),
    calendar_type varchar(20),
    start_date datetime default null,
    end_date datetime default null,
    time varchar(100) default null,
    location varchar(500) default null,
    state varchar(500) default null,
    short_desc text default null,
    content text default null,
    video_url varchar(1000) default null,
    contact varchar(255) default null,
    email_address varchar(1000) default null,
    website varchar(1000) default null,
    featured_image blob default null,
    featured_image_title varchar(255) default null,
    status varchar(200),
    created_on datetime default null,
    created_by bigint(20) default null,
    last_modified_on datetime default null,
    last_modified_by bigint(20) default null    
);

/**
 * This table is used for managing the videos
 */
create table videos (
    video_id bigint(20) unsigned auto_increment primary key,
    title varchar(1000),
    featured_image_small varchar(1000) default null,
    featured_image_large varchar(1000) default null,
    video_script text default null,
    is_main_video char(10) default 'N',
    is_show char(10) default 'N',
    created_on datetime default null,
    created_by bigint(20) default null,
    last_modified_on datetime default null,
    last_modified_by bigint(20) default null 
);

/**
 * This table is used for saving the comments for all post types
 */
create table comments (
    comment_id bigint(20) unsigned auto_increment primary key,
    post_id bigint(20),
    post_type varchar(200),
    author_name tinytext,
    author_email varchar(1000),
    author_ip varchar(100),
    comment_parent bigint(20),
    content text,
    status varchar(100), -- Approved, Waiting
    created_on datetime default null,
    user_id bigint(20)    
);

/**
 * This table is used for attachments of all type of posts like
 * listing, calendars, directories, 
 */
create table attachments (
    attachment_id bigint unsigned auto_increment primary key,
    post_type varchar(200),
    post_id bigint(20),
    file_path varchar(1000),
    display_order int(20),
	status char(10),
    is_default char(10) default null
);

/** This table is used for storing the masters like Countries, State,
 * Categories, etc.
 */ 
create table masters (
    master_id bigint(20) unsigned auto_increment primary key,
    type varchar(200),
    code varchar(255),
    value varchar(500),
    display_order int(20),
    status char(10)
);

/**
 * This table is used to manage the menus.
 */
create table menus (
	menu_id bigint(20) unsigned auto_increment primary key,
	name varchar(500),
	controller varchar(255),
	action varchar(300),
	icon varchar(300),
	status varchar(200),
	display_order int(20),
	type varchar(300),
	show_users varchar(500),
	hide_users varchar(500)
	-- add the other extra columns
);