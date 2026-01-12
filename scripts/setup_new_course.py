import os
import sys

import course_config

def mkdirDashP(dir):
    if not os.path.exists(dir):
        os.mkdir(dir);

def execute(cmd):
    print("Executing: %s" % cmd);
    if os.system(cmd) != 0:
        print("ERROR EXECUTING %s: ABORTING" % cmd);
        sys.exit(-1);
        
            
##########################################################################
##########################################################################

INIT_DB_SCRIPT = "create_db.sql"

LECTURES_DIR = "lectures"
UPLOADS_DIR = "uploads"
PROFILE_PICS_DIR = "profile_pictures"
ARTICLE_IMAGES_DIR = "article_images";


##########################################################################
##########################################################################

#NOTE: not using os.path.join because local_content_base_dir "looks like" an absolute path:
CONTENT_DIR = course_config.site_jail_prefix + course_config.site_local_content_base_dir

if __name__ == "__main__":
    
    if os.path.exists(CONTENT_DIR):
        print("Aborting... specified content directory (%s) already exists." % os.path.abspath(CONTENT_DIR));
        print("Delete it before proceeding. (Script does not overwrite to prevent anything bad from happening...)");
        sys.exit(-1);

    print("")
    print("Initializing course web site...")
    print("   mysql database name:  %s" % course_config.database_name)
    print("   content directory:    %s" % os.path.abspath(CONTENT_DIR))
    print("")
    print("You are about to be prompted for your SQL database password...")
    print("")

    # create directories
    mkdirDashP(CONTENT_DIR);
    mkdirDashP(os.path.join(CONTENT_DIR, LECTURES_DIR));
    mkdirDashP(os.path.join(CONTENT_DIR, UPLOADS_DIR));
    mkdirDashP(os.path.join(CONTENT_DIR, PROFILE_PICS_DIR));
    mkdirDashP(os.path.join(CONTENT_DIR, ARTICLE_IMAGES_DIR));
   
    # create the initial database
     
    # handling create + init as two commands so that a jexec'd mysql isn't trying to source a file from outside the chroot
    mysql_commands  =  "create database %s;" % course_config.database_name;
    execute("%s --user %s --password=%s -e '%s'" % (course_config.mysql_command, course_config.database_user, course_config.database_passwd, mysql_commands));
    execute("%s --user %s --password=%s %s < %s" % (course_config.mysql_command, course_config.database_user, course_config.database_passwd, course_config.database_name, INIT_DB_SCRIPT));

    # Give apache permissions to write to the content directory (by
    # changing group to the webserver group and giving that group the
    # appropriate permissions
    execute("chgrp -R %s %s" % (course_config.webserver_group, CONTENT_DIR));
    execute("chmod -R g+rwx %s" % CONTENT_DIR);
    execute("chmod -R o-rwx %s" % CONTENT_DIR);
    
    print("")
    print("SUCCESS! CREATED CONTENT DIR AND NEW DATABASE!")
    print("")
    print("This is a good time to ensure that:")
    print("  -- Imagemagick is installed on this machine.")
    print("  -- The value of upload_max_filesize in php5/apache2/php.ini is large enough for your slide uploads. (The PHP default is only 2MB, and slide PDFs are likely to be much bigger than that.)")
    print("")
