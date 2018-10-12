# SFTP-File-Mapper

This tool helps to map all the files from an SFTP server to local.
Written this tool to reduce the time taken by Submile Text SFTP plugin to download all the files.
This tool doesn't download the files themselves but creates empty files in local as an exact replica of remote file tree to make the mapping faster.
Whenever we open the file in Sublime Text, the actual file will be downloaded.
