REM 7z.exe a commandline compression app from 7-zip
del polartemplate.zip
..\7z a -Y polartemplate.zip *.php
..\7z a -Y polartemplate.zip *.xml
..\7z a -Y polartemplate.zip css
..\7z a -Y polartemplate.zip fonts
..\7z a -Y polartemplate.zip html
..\7z a -Y polartemplate.zip language
..\7z a -Y polartemplate.zip less

