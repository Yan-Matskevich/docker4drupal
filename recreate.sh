DB_NAME=$1
DB_USERNAME=root
DB_PASSWORD=password
DB_BASE=$2
#SITE_FOLDER=$3

R=$(tput setaf 1)
N=$(tput sgr0)
Y=$(tput setaf 3)

if [ -z "${DB_NAME}" -o -z "${DB_BASE}" ]; then
 printf "%-`expr 80 - ${#b}`s %-40s\n" $R"Please specify DB name, DB dump name, SiteName" "[error]"$N
 exit 1
fi

T=`date +%s`

`mysql --user=$DB_USERNAME --password=$DB_PASSWORD -e "DROP DATABASE $DB_NAME"`
`mysql --user=$DB_USERNAME --password=$DB_PASSWORD -e "CREATE DATABASE $DB_NAME"`

echo $Y"Summary time, [$(((`date +%s`-$T)))] sec"$N

#pv $DB_BASE | mysql --user=$DB_USERNAME --password=$DB_PASSWORD $DB_NAME
mysql --user=$DB_USERNAME --password=$DB_PASSWORD $DB_NAME < $DB_BASE

#cd ../docroot/sites/$SITE_FOLDER
#drush db update