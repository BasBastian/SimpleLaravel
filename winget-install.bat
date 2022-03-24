@echo off
REM Install all of your dependencies on Windows
REM Just please add those to your env, as winget is not as elaborate tool as you'd think

REM I am more of a Linux guy, so I am looking forward to see it behave as APT, YUM, DNF or PACMAN replacement for Windows

REM I especially dislike the propagation and confusion behind setting env variables in Windows
REM So please be mindful - you might need to switch your Terminal "off and on again" (IT Crowd)

ECHO "Starting..."

REM install XAMPP (Apache, MySQL, PHP and others as well as Control Panel UI)
winget install ApacheFriends.Xampp --version 8.1.4-0
echo "XAMPP installed"

REM install Git
winget install Git.Git
echo "Git installed"

REM install Microsoft.WindowsTerminal - for your convenience, optional
winget install Microsoft.WindowsTerminal
echo "WindowsTerminal installed"

REM install Vim editor - for my convenience, optional
winget install vim.vim
echo "Vim installed"

REM install NodeJS - we must be veeery specific about this one, so we'll use LinkedIn's Volta
winget install Volta.Volta
echo "Volta installed"

REM you might've need to close the File Explorer, all terminals and reopen - WinGet has issues reloading Environment Variables
.\scripts\windows\refreshenv.bat
volta install node@16
echo "NodeJS@16 installed"
.\scripts\windows\refreshenv.bat
echo "Done"
