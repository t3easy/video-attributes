#
# Table structure for table 'sys_file_reference'
# which is one usage of a file with overloaded metadata
#
CREATE TABLE sys_file_reference (
    controls tinyint(4) DEFAULT '0' NOT NULL,
    disable_picture_in_picture tinyint(4) DEFAULT '0' NOT NULL,
    `loop` tinyint(4) DEFAULT '0' NOT NULL,
    muted tinyint(4) DEFAULT '0' NOT NULL,
    playsinline tinyint(4) DEFAULT '0' NOT NULL
);
