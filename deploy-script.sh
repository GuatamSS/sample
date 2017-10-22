#!/bin/bash
if [ "$TRAVIS_BRANCH" == "master" ]; then
	#do the deploy
	git config git-ftp.user frore-mitten
	git config git-ftp.url files.000webhost.com/public_html/
	git config git-ftp.password hellohello
	#git ftp init --user $Username --passwd $Pwd ftp://domain.com/public_html/
	git ftp push
fi