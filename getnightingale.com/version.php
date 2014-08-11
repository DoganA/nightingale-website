<?php
    include_once "../static.getnightingale.com/php/env.php";
    $version = '1.13';
    $UNKNOWN = 'unknown';
    
    $download['windows']['url'] = ''; // download url
    $download['windows']['img'] = $protocol.'static.getnightingale.com/images/wine.png'; // symbolicon
    $download['windows']['osname'] = 'Windows';
    $download['windows']['arch'] = 32;
    $download['windows']['package'] = '.exe Installer'; // orange package info
    $download['windows']['popup'] = false;

    $download['portablewindows']['url'] = '';
    $download['portablewindows']['img'] = $protocol.'static.getnightingale.com/images/wine.png';
    $download['portablewindows']['osname'] = 'Windows';
    $download['portablewindows']['arch'] = 32;
    $download['portablewindows']['package'] = 'Portable .exe';
    $download['portablewindows']['popup'] = false;
    
    $download['mac']['url'] = '';
    $download['mac']['img'] = $protocol.'static.getnightingale.com/images/dmg.png';
    $download['mac']['osname'] = 'Mac OS X';
    $download['mac']['arch'] = 32;
    $download['mac']['package'] = '.dmg';
    $download['mac']['popup'] = false;
    
    $download['ubuntu']['url'] = '';
    $download['ubuntu']['img'] = $protocol.'static.getnightingale.com/images/start-here-ubuntuoriginal.png';
    $download['ubuntu']['osname'] = 'Ubuntu';
    $download['ubuntu']['arch'] = getArch();
    $download['ubuntu']['package'] = 'PPA';
    $download['ubuntu']['popup'] = true;
    $download['ubuntu']['popupPackageName'] = 'nightingale';
    
    $download['debian']['url'] = '';
    $download['debian']['img'] = $protocol.'static.getnightingale.com/images/application-x-deb.png';
    $download['debian']['osname'] = 'Debian';
    $download['debian']['arch'] = 32;
    $download['debian']['package'] = '.deb';
    $download['debian']['popup'] = false;
    
    $download['arch']['url'] = 'https://aur.archlinux.org/packages/nightingale/';
    $download['arch']['img'] = $protocol.'static.getnightingale.com/images/package-x-generic.png';
    $download['arch']['osname'] = 'Archlinux';
    $download['arch']['arch'] = 32;
    $download['arch']['package'] = 'PKGBUILD';
    $download['arch']['popup'] = false;
    
    $download['gentoo']['url'] = 'https://bugs.gentoo.org/show_bug.cgi?id=316443';
    $download['gentoo']['img'] = $protocol.'static.getnightingale.com/images/package-x-generic.png';
    $download['gentoo']['osname'] = 'Gentoo';
    $download['gentoo']['arch'] = getArch();
    $download['gentoo']['package'] = 'ebuild';
    $download['gentoo']['popup'] = false;
    
    $download['linux32']['url'] = '';
    $download['linux32']['img'] = $protocol.'static.getnightingale.com/images/package-x-generic.png';
    $download['linux32']['osname'] = 'Linux';
    $download['linux32']['arch'] = 32;
    $download['linux32']['package'] = '.tar.bz2';
    $download['linux32']['popup'] = false;
    
    $download['linux64']['url'] = '';
    $download['linux64']['img'] = $protocol.'static.getnightingale.com/images/package-x-generic.png';
    $download['linux64']['osname'] = 'Linux';
    $download['linux64']['arch'] = 64;
    $download['linux64']['package'] = '.tar.bz2';
    $download['linux64']['popup'] = false;
    
    $download[$UNKNOWN]['url'] = '/download.php';
    $download[$UNKNOWN]['img'] = $protocol.'static.getnightingale.com/images/package-x-generic.png';
    $download[$UNKNOWN]['osname'] = 'Unknown';
    $download[$UNKNOWN]['arch'] = 'unknown';
    $download[$UNKNOWN]['package'] = '';
    $download[$UNKNOWN]['popup'] = false;
    
    $tarball = 'https://github.com/nightingale-media-player/nightingale-hacking/archive/nightingale-1.12.2.tar.gz';
    
    function getArch() {
        $arch = 32;
        if(preg_match('/x86_64|amd64/i', $_SERVER['HTTP_USER_AGENT']))
            $arch = 64;
        return $arch;
    }

    if($_GET['as'] === 'num')
    {
        echo $version;
    }
    else if($_GET['as'] === 'json')
    {
        echo encode_json($download);
    }
?>
