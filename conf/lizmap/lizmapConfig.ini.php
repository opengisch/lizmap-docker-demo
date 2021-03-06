;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

hideSensitiveServicesProperties=1

;Services
;list the different map services (servers, generic parameters, etc.)
[services]
wmsServerURL="qgisserver/cgi-bin/qgis_mapserv.fcgi"
;List of URL available for the web client
onlyMaps=off
cacheStorageType=redis
;cacheStorageType=sqlite => store cached images in one sqlite file per repo/project/layer
;cacheStorageType=file => store cached images in one folder per repo/project/layer. The root folder is /tmp/
cacheRedisHost=redis
cacheRedisPort=6379
cacheExpiration=0
cacheRedisDb=1
cacheRedisKeyPrefix=
; default cache expiration : the default time to live of data, in seconds.
; 0 means no expiration, max : 2592000 seconds (30 days)
proxyMethod=php
; php -> use the built in file_get_contents method
; curl-> use curl. It must be installed.
debugMode=1
; debug mode
; on = print debug messages in lizmap/var/log/messages.log
; off = no lizmap debug messages
cacheRootDirectory="/tmp/"
; cache root directory where cache files will be stored
; must be writable
allowUserAccountRequests=off

; path to find repositories
rootRepositories="/srv/projects"

; Use relative path
relativeWMSPath=true

qgisServerVersion=3.0
proxyMethod=curl

appName=Lizmap
projectSwitcher=on
[repository:test]
label=test
path="/io/data/"
allowUserDefinedThemes=1






































