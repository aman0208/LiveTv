<?php
$playlist = fopen("playlist.m3u", "w") or die("Unable to open file!");
$ipadd=$_GET["ipadd"];

$modlist =
'#EXTM3U
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png" group-title="Avi JioTV",Colors Cineplex HD
http://'.$ipadd.'/live.php?c=Colors_Cineplex_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" group-title="Avi JioTV",DD National
http://'.$ipadd.'/live.php?c=DD_National&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" group-title="Avi JioTV",Sony HD
http://'.$ipadd.'/live.php?c=Sony_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" group-title="Avi JioTV",Sony SAB HD
http://'.$ipadd.'/live.php?c=Sony_SAB_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" group-title="Avi JioTV",Sony SAB
http://'.$ipadd.'/live.php?c=Sony_SAB&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" group-title="Avi JioTV",And TV HD
http://'.$ipadd.'/live.php?c=And_TV_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" group-title="Avi JioTV",Zee TV HD
http://'.$ipadd.'/live.php?c=Zee_TV_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" group-title="Avi JioTV",Colors HD
http://'.$ipadd.'/live.php?c=Colors_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" group-title="Avi JioTV",Zee Anmol
http://'.$ipadd.'/live.php?c=Zee_Anmol&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" group-title="Avi JioTV",Rishtey
http://'.$ipadd.'/live.php?c=Rishtey&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" group-title="Avi JioTV",Sony Pal
http://'.$ipadd.'/live.php?c=Sony_Pal&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" group-title="Avi JioTV",Investigation Discovery
http://'.$ipadd.'/live.php?c=ID&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" group-title="Avi JioTV",Arre HD
http://'.$ipadd.'/live.php?c=Arre&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" group-title="Avi JioTV",Dangal
http://'.$ipadd.'/live.php?c=Dangal&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png" group-title="Avi JioTV",DD Kisan
http://'.$ipadd.'/live.php?c=DD_Kisan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" group-title="Avi JioTV",Colors Infinity HD
http://'.$ipadd.'/live.php?c=Colors_Infinity_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" group-title="Avi JioTV",Comedy Central HD
http://'.$ipadd.'/live.php?c=Comedy_Central_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Housefull_Movies.png" group-title="Avi JioTV",Housefull Movies
http://'.$ipadd.'/live.php?c=Housefull_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png" group-title="Avi JioTV",India Science
http://'.$ipadd.'/live.php?c=India_Science&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png" group-title="Avi JioTV",Jio Football HD
http://'.$ipadd.'/live.php?c=Jio_Football&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png" group-title="Avi JioTV",Jio Cricket English HD
http://'.$ipadd.'/live.php?c=Jio_Cricket&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png" group-title="Avi JioTV",Gyan Brikshya
http://'.$ipadd.'/live.php?c=Gyan_Brikshya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png" group-title="Avi JioTV",Jio Cricket 1 HD
http://'.$ipadd.'/live.php?c=Jio_Cricket_1_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" group-title="Avi JioTV",Sony Max HD
http://'.$ipadd.'/live.php?c=Sony_Max_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png" group-title="Avi JioTV",Zee Cinema HD
http://'.$ipadd.'/live.php?c=Zee_Cinema_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" group-title="Avi JioTV",Zee Cinema
http://'.$ipadd.'/live.php?c=Zee_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png" group-title="Avi JioTV",Jio Football 1 HD
http://'.$ipadd.'/live.php?c=Jio_Football_1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png" group-title="Avi JioTV",Jio Football 2 HD
http://'.$ipadd.'/live.php?c=Jio_Football_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png" group-title="Avi JioTV",Jio Football 3 HD
http://'.$ipadd.'/live.php?c=Jio_Football_3&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" group-title="Avi JioTV",Zee Bollywood
http://'.$ipadd.'/live.php?c=Zee_Classic&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" group-title="Avi JioTV",And Pictures HD
http://'.$ipadd.'/live.php?c=And_Pictures_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png" group-title="Avi JioTV",Zee Action
http://'.$ipadd.'/live.php?c=Zee_Action&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" group-title="Avi JioTV",B4U Movies
http://'.$ipadd.'/live.php?c=B4U_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" group-title="Avi JioTV",Sony MAX2
http://'.$ipadd.'/live.php?c=Sony_MAX2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png" group-title="Avi JioTV",Enterr 10
http://'.$ipadd.'/live.php?c=Enterr_10&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" group-title="Avi JioTV",Colors Cineplex
http://'.$ipadd.'/live.php?c=Colors_Cineplex&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png" group-title="Avi JioTV",Zee Anmol Cinema
http://'.$ipadd.'/live.php?c=Zee_Anmol_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BOX_CINEMA.png" group-title="Avi JioTV",Box Cinema
http://'.$ipadd.'/live.php?c=Box_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png" group-title="Avi JioTV",Maha Movies
http://'.$ipadd.'/live.php?c=Maha_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" group-title="Avi JioTV",Sony Pix HD
http://'.$ipadd.'/live.php?c=Sony_Pix_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HBO_HD.png" group-title="Avi JioTV",HBO HD
http://'.$ipadd.'/live.php?c=HBO_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/WB.png" group-title="Avi JioTV",WB
http://'.$ipadd.'/live.php?c=WB&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" group-title="Avi JioTV",Hi Dost!
http://'.$ipadd.'/live.php?c=Hi_Dost&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_One_News.png" group-title="Avi JioTV",Channel One News
http://'.$ipadd.'/live.php?c=Channel_One_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png" group-title="Avi JioTV",K News India
http://'.$ipadd.'/live.php?c=K_News_India&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png" group-title="Avi JioTV",DNN
http://'.$ipadd.'/live.php?c=DNN&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png" group-title="Avi JioTV",DD Sports
http://'.$ipadd.'/live.php?c=DD_Sports&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" group-title="Avi JioTV",Ten 1 HD
http://'.$ipadd.'/live.php?c=Ten_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" group-title="Avi JioTV",Ten 1
http://'.$ipadd.'/live.php?c=Ten_1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" group-title="Avi JioTV",Ten 2 HD
http://'.$ipadd.'/live.php?c=Ten2_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" group-title="Avi JioTV",Ten 2
http://'.$ipadd.'/live.php?c=Ten_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" group-title="Avi JioTV",Ten 3 HD
http://'.$ipadd.'/live.php?c=Ten3_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" group-title="Avi JioTV",Ten 3
http://'.$ipadd.'/live.php?c=Ten_3&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" group-title="Avi JioTV",Sony Six HD
http://'.$ipadd.'/live.php?c=Six_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" group-title="Avi JioTV",Sony Six SD
http://'.$ipadd.'/live.php?c=Sony_Six_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png" group-title="Avi JioTV",Eurosport
http://'.$ipadd.'/live.php?c=Dsports&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png" group-title="Avi JioTV",Eurosport HD
http://'.$ipadd.'/live.php?c=Dsports_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" group-title="Avi JioTV",Manjari TV
http://'.$ipadd.'/live.php?c=Manjari_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png" group-title="Avi JioTV",HHDL
http://'.$ipadd.'/live.php?c=HHDL&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png" group-title="Avi JioTV",Top Tutor
http://'.$ipadd.'/live.php?c=Top_Tutor&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png" group-title="Avi JioTV",RT TV
http://'.$ipadd.'/live.php?c=RT_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png" group-title="Avi JioTV",Reporter TV
http://'.$ipadd.'/live.php?c=Reporter_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png" group-title="Avi JioTV",Jio KIDS
http://'.$ipadd.'/live.php?c=Jio_KIDS&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png" group-title="Avi JioTV",Utkarsh Primary
http://'.$ipadd.'/live.php?c=Utkarsh_Primary&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png" group-title="Avi JioTV",Utkarsh HSBTE
http://'.$ipadd.'/live.php?c=Utkarsh_Middle&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png" group-title="Avi JioTV",Utkarsh Secondary
http://'.$ipadd.'/live.php?c=Utkarsh_Secondary&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png" group-title="Avi JioTV",Utkarsh Higher
http://'.$ipadd.'/live.php?c=Utkarsh_Higher&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png" group-title="Avi JioTV",Shiksha TV
http://'.$ipadd.'/live.php?c=Shiksha_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png" group-title="Avi JioTV",Janapriyam
http://'.$ipadd.'/live.php?c=Janapriyam_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png" group-title="Avi JioTV",Shree Ganesh - Moti Doongri Jaipur
http://'.$ipadd.'/live.php?c=Moti_Doongri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png" group-title="Avi JioTV",Daijiworld TV 24x7
http://'.$ipadd.'/live.php?c=Daijiworld_TV_24X7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png" group-title="Avi JioTV",News J
http://'.$ipadd.'/live.php?c=News_J&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png" group-title="Avi JioTV",DD News
http://'.$ipadd.'/live.php?c=DD_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png" group-title="Avi JioTV",ABP News India
http://'.$ipadd.'/live.php?c=ABP_News_India&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png" group-title="Avi JioTV",Aaj Tak
http://'.$ipadd.'/live.php?c=Aaj_Tak&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" group-title="Avi JioTV",Zee News
http://'.$ipadd.'/live.php?c=Zee_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" group-title="Avi JioTV",India TV
http://'.$ipadd.'/live.php?c=India_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png" group-title="Avi JioTV",News 24
http://'.$ipadd.'/live.php?c=News_24&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" group-title="Avi JioTV",News 18 India
http://'.$ipadd.'/live.php?c=IBN_7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png" group-title="Avi JioTV",Zee Hindustan
http://'.$ipadd.'/live.php?c=Zee_SANGAM&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png" group-title="Avi JioTV",India news
http://'.$ipadd.'/live.php?c=India_news&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png" group-title="Avi JioTV",ABP Ganga
http://'.$ipadd.'/live.php?c=ABP_Ganga&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png" group-title="Avi JioTV",News Nation
http://'.$ipadd.'/live.php?c=News_Nation&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png" group-title="Avi JioTV",Euro News
http://'.$ipadd.'/live.php?c=Euro_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png" group-title="Avi JioTV",Total TV
http://'.$ipadd.'/live.php?c=Total_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png" group-title="Avi JioTV",Live Today
http://'.$ipadd.'/live.php?c=Live_Today&q=800&e=.m3u8';



fwrite($playlist, $modlist);


$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png" group-title="Avi JioTV",Sahara Samay Rastriya
http://'.$ipadd.'/live.php?c=Sahara_Samay_Rastriya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png" group-title="Avi JioTV",India News Haryana
http://'.$ipadd.'/live.php?c=India_News_Haryana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png" group-title="Avi JioTV",Taaza TV
http://'.$ipadd.'/live.php?c=Taaza_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png" group-title="Avi JioTV",Living India News
http://'.$ipadd.'/live.php?c=Living_India_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png" group-title="Avi JioTV",Sudarshan
http://'.$ipadd.'/live.php?c=Sudarshan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png" group-title="Avi JioTV",Kashish News
http://'.$ipadd.'/live.php?c=Kashish_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png" group-title="Avi JioTV",SMBC TV
http://'.$ipadd.'/live.php?c=SMBC_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png" group-title="Avi JioTV",SAHARA SAMAY MP
http://'.$ipadd.'/live.php?c=SAHARA_SAMAY_MP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png" group-title="Avi JioTV",SAHARA SAMAY UP
http://'.$ipadd.'/live.php?c=SAHARA_SAMAY_UP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png" group-title="Avi JioTV",Sadhna News Plus
http://'.$ipadd.'/live.php?c=Sadhna_News_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png" group-title="Avi JioTV",Sahara Samay Bihar
http://'.$ipadd.'/live.php?c=Sahara_Samay_Bihar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png" group-title="Avi JioTV",Samay Rajasthan
http://'.$ipadd.'/live.php?c=Samay_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png" group-title="Avi JioTV",JK 24x7 News
http://'.$ipadd.'/live.php?c=JK_24x7_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png" group-title="Avi JioTV",Prime Time News
http://'.$ipadd.'/live.php?c=Pratidin_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png" group-title="Avi JioTV",Mh One News
http://'.$ipadd.'/live.php?c=Mh_One_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png" group-title="Avi JioTV",India News UP
http://'.$ipadd.'/live.php?c=India_News_UP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png" group-title="Avi JioTV",News State UK UP
http://'.$ipadd.'/live.php?c=News_State_UK_UP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png" group-title="Avi JioTV",India News MP
http://'.$ipadd.'/live.php?c=India_News_MP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png" group-title="Avi JioTV",India News Rajasthan
http://'.$ipadd.'/live.php?c=India_News_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png" group-title="Avi JioTV",Zee UP UK
http://'.$ipadd.'/live.php?c=Living_Foodz&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png" group-title="Avi JioTV",Lokshahi News
http://'.$ipadd.'/live.php?c=Lokshahi_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png" group-title="Avi JioTV",India Voice
http://'.$ipadd.'/live.php?c=India_Voice&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png" group-title="Avi JioTV",PM e Vidya 12
http://'.$ipadd.'/live.php?c=evidya_12&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png" group-title="Avi JioTV",Hindi Khabar
http://'.$ipadd.'/live.php?c=Hindi_Khabar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png" group-title="Avi JioTV",Jan TV
http://'.$ipadd.'/live.php?c=Jan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png" group-title="Avi JioTV",News India 24x7
http://'.$ipadd.'/live.php?c=News_India_24_X_7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png" group-title="Avi JioTV",Tez
http://'.$ipadd.'/live.php?c=Tez&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png" group-title="Avi JioTV",Zee Business
http://'.$ipadd.'/live.php?c=Zee_Business&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png" group-title="Avi JioTV",CNBC Awaaz
http://'.$ipadd.'/live.php?c=CNBC_Awaaz&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png" group-title="Avi JioTV",Loksabha TV
http://'.$ipadd.'/live.php?c=Loksabha_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png" group-title="Avi JioTV",DD Rajyasabha
http://'.$ipadd.'/live.php?c=DD_Rajyasabha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png" group-title="Avi JioTV",India Today
http://'.$ipadd.'/live.php?c=India_Today&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png" group-title="Avi JioTV",CNN NEWS 18
http://'.$ipadd.'/live.php?c=CNN_NEWS_18&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png" group-title="Avi JioTV",News X
http://'.$ipadd.'/live.php?c=News_X&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png" group-title="Avi JioTV",Wion
http://'.$ipadd.'/live.php?c=Wion&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png" group-title="Avi JioTV",Republic TV
http://'.$ipadd.'/live.php?c=Republic_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" group-title="Avi JioTV",DD India
http://'.$ipadd.'/live.php?c=DD_India&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png" group-title="Avi JioTV",CNBC Tv18 Prime HD
http://'.$ipadd.'/live.php?c=CNBC_Tv18_Prime_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png" group-title="Avi JioTV",CNBC Tv 18
http://'.$ipadd.'/live.php?c=CNBC_Tv_18&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_9.png" group-title="Avi JioTV",News 9
http://'.$ipadd.'/live.php?c=News_9&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png" group-title="Avi JioTV",CNN
http://'.$ipadd.'/live.php?c=CNN&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png" group-title="Avi JioTV",BBC World News
http://'.$ipadd.'/live.php?c=BBC_World_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png" group-title="Avi JioTV",Sonic Hindi
http://'.$ipadd.'/live.php?c=sonic_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png" group-title="Avi JioTV",AL Jazeera
http://'.$ipadd.'/live.php?c=AL_Jazeera&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png" group-title="Avi JioTV",Channel News Asia International
http://'.$ipadd.'/live.php?c=Channel_News_Asia_International&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png" group-title="Avi JioTV",France 24
http://'.$ipadd.'/live.php?c=France_24&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png" group-title="Avi JioTV",TV5 Monde
http://'.$ipadd.'/live.php?c=TV_5_Monde&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/dw.png" group-title="Avi JioTV",dw
http://'.$ipadd.'/live.php?c=dw&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png" group-title="Avi JioTV",Discovery Kids 2
http://'.$ipadd.'/live.php?c=Discovery_Kids_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png" group-title="Avi JioTV",Sonic Kannada
http://'.$ipadd.'/live.php?c=Sonic_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png" group-title="Avi JioTV",Sonic Telugu
http://'.$ipadd.'/live.php?c=Sonic_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png" group-title="Avi JioTV",Nick Malayalam
http://'.$ipadd.'/live.php?c=Nick_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png" group-title="Avi JioTV",Nick Bangla
http://'.$ipadd.'/live.php?c=Nick_Bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png" group-title="Avi JioTV",Nick Marathi
http://'.$ipadd.'/live.php?c=Nick_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Gujarati.png" group-title="Avi JioTV",Nick Gujarati
http://'.$ipadd.'/live.php?c=Nick_Gujarati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png" group-title="Avi JioTV",CN HD+ Tamil
http://'.$ipadd.'/live.php?c=CN_HD_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png" group-title="Avi JioTV",Cartoon Network Tamil
http://'.$ipadd.'/live.php?c=Cartoon_Network_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png" group-title="Avi JioTV",Pogo Tamil
http://'.$ipadd.'/live.php?c=Pogo_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png" group-title="Avi JioTV",Nick Tamil
http://'.$ipadd.'/live.php?c=Nick_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png" group-title="Avi JioTV",sonic Tamil
http://'.$ipadd.'/live.php?c=sonic_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" group-title="Avi JioTV",Sony Yay Tamil
http://'.$ipadd.'/live.php?c=Sony_Yay_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png" group-title="Avi JioTV",Discovery Kids Tamil
http://'.$ipadd.'/live.php?c=Discovery_Kids_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png" group-title="Avi JioTV",Nick Kannada
http://'.$ipadd.'/live.php?c=Nick_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png" group-title="Avi JioTV",CN HD+ Telugu
http://'.$ipadd.'/live.php?c=CN_HD_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png" group-title="Avi JioTV",Cartoon Network Telugu
http://'.$ipadd.'/live.php?c=Cartoon_Network_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png" group-title="Avi JioTV",Nick Telugu
http://'.$ipadd.'/live.php?c=Nick_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png" group-title="Avi JioTV",Nick Hindi
http://'.$ipadd.'/live.php?c=Nick_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" group-title="Avi JioTV",Sony Yay Telugu
http://'.$ipadd.'/live.php?c=Sony_Yay_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png" group-title="Avi JioTV",CN HD+ English
http://'.$ipadd.'/live.php?c=CN_HD_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png" group-title="Avi JioTV",Cartoon Network Hindi
http://'.$ipadd.'/live.php?c=Cartoon_Network_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD+.png" group-title="Avi JioTV",Nick HD+
http://'.$ipadd.'/live.php?c=Nick_HD_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png" group-title="Avi JioTV",Pogo Hindi
http://'.$ipadd.'/live.php?c=Pogo_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png" group-title="Avi JioTV",Nickelodeon
http://'.$ipadd.'/live.php?c=Nickelodeon&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png" group-title="Avi JioTV",Sonic Malayalam
http://'.$ipadd.'/live.php?c=Sonic_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png" group-title="Avi JioTV",Sonic Bangla
http://'.$ipadd.'/live.php?c=Sonic_Bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png" group-title="Avi JioTV",Sonic Marathi
http://'.$ipadd.'/live.php?c=Sonic_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Gujarati.png" group-title="Avi JioTV",Sonic Gujarati
http://'.$ipadd.'/live.php?c=Sonic_Gujarati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png" group-title="Avi JioTV",Nick Junior
http://'.$ipadd.'/live.php?c=Nick_Junior&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png" group-title="Avi JioTV",Nickelodeon Jr.
http://'.$ipadd.'/live.php?c=Nickelodeon_Jr&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" group-title="Avi JioTV",Sony Yay Hindi
http://'.$ipadd.'/live.php?c=Sony_Yay_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png" group-title="Avi JioTV",Discovery HD World
http://'.$ipadd.'/live.php?c=Discovery_HD_World&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png" group-title="Avi JioTV",Discovery
http://'.$ipadd.'/live.php?c=Discovery&q=800&e=.m3u8';


fwrite($playlist, $modlist);


$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png" group-title="Avi JioTV",D Tamil
http://'.$ipadd.'/live.php?c=Discovery_Channel_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png" group-title="Avi JioTV",Animal Planet HD World
http://'.$ipadd.'/live.php?c=Animal_Planet_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png" group-title="Avi JioTV",Animal Planet English
http://'.$ipadd.'/live.php?c=Animal_Planet_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png" group-title="Avi JioTV",Discovery Science
http://'.$ipadd.'/live.php?c=Discovery_Science&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png" group-title="Avi JioTV",History TV18 HD
http://'.$ipadd.'/live.php?c=History_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png" group-title="Avi JioTV",History TV18 HD Hindi
http://'.$ipadd.'/live.php?c=History_18_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" group-title="Avi JioTV",Sony BBC Earth HD
http://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" group-title="Avi JioTV",Epic
http://'.$ipadd.'/live.php?c=Epic_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png" group-title="Avi JioTV",TLC HD
http://'.$ipadd.'/live.php?c=TLC_HD_World&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png" group-title="Avi JioTV",TLC English
http://'.$ipadd.'/live.php?c=TLC_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png" group-title="Avi JioTV",TLC Hindi
http://'.$ipadd.'/live.php?c=TLC_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png" group-title="Avi JioTV",Sadhguru Television HD
http://'.$ipadd.'/live.php?c=Sadhguru_Television&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png" group-title="Avi JioTV",Discovery Turbo
http://'.$ipadd.'/live.php?c=Discovery_Turbo&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_10th_English.png" group-title="Avi JioTV",Dnyanganga 10th English
http://'.$ipadd.'/live.php?c=Mahawani_10th_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png" group-title="Avi JioTV",Travel XP HD
http://'.$ipadd.'/live.php?c=Travel_XP_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png" group-title="Avi JioTV",TV Teacher
http://'.$ipadd.'/live.php?c=TV_Teacher&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png" group-title="Avi JioTV",Travel XP HD Hindi
http://'.$ipadd.'/live.php?c=Travel_XP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png" group-title="Avi JioTV",Food Food
http://'.$ipadd.'/live.php?c=Food_Food&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png" group-title="Avi JioTV",Care World
http://'.$ipadd.'/live.php?c=Care_World&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png" group-title="Avi JioTV",Animal Planet HD Tamil
http://'.$ipadd.'/live.php?c=Animal_Planet_HD_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_English_Medium.png" group-title="Avi JioTV",Dnyanganga 9th English
http://'.$ipadd.'/live.php?c=Dnyanganga_9_English_Medium&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Urdhu_Medium.png" group-title="Avi JioTV",Dnyanganga 9th Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_9_Urdhu_Medium&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_10_Urdhu_Medium.png" group-title="Avi JioTV",Dnyanganga 10th Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_10_Urdhu_Medium&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png" group-title="Avi JioTV",Parmarth TV
http://'.$ipadd.'/live.php?c=Parmarth_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png" group-title="Avi JioTV",Jio Events HD
http://'.$ipadd.'/live.php?c=Jio_Events&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" group-title="Avi JioTV",Jio Exclusive HD
http://'.$ipadd.'/live.php?c=Jio_Exclusive&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png" group-title="Avi JioTV",MTV HD Plus
http://'.$ipadd.'/live.php?c=MTV_HD_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png" group-title="Avi JioTV",MTV
http://'.$ipadd.'/live.php?c=MTV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9XM.jpg" group-title="Avi JioTV",9XM
http://'.$ipadd.'/live.php?c=9XM&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png" group-title="Avi JioTV",E 24
http://'.$ipadd.'/live.php?c=E_24&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" group-title="Avi JioTV",Sony BBC Earth HD English
http://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png" group-title="Avi JioTV",MTV Beats HD
http://'.$ipadd.'/live.php?c=MTV_Beats_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png" group-title="Avi JioTV",B4U Music
http://'.$ipadd.'/live.php?c=B4U_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/etc.png" group-title="Avi JioTV",Zee etc
http://'.$ipadd.'/live.php?c=etc&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png" group-title="Avi JioTV",Mastiii
http://'.$ipadd.'/live.php?c=Mastiii&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png" group-title="Avi JioTV",Zing
http://'.$ipadd.'/live.php?c=Zing&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png" group-title="Avi JioTV",Music India
http://'.$ipadd.'/live.php?c=Music_India&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png" group-title="Avi JioTV",9X Jalwa
http://'.$ipadd.'/live.php?c=9X_Jalwa&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png" group-title="Avi JioTV",Animal Planet Hindi
http://'.$ipadd.'/live.php?c=Animal_Planet_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png" group-title="Avi JioTV",Discovery Channel Hindi
http://'.$ipadd.'/live.php?c=Discovery_Channel_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png" group-title="Avi JioTV",Bflix Movies
http://'.$ipadd.'/live.php?c=Bflix_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png" group-title="Avi JioTV",Manoranjan TV
http://'.$ipadd.'/live.php?c=Manoranjan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png" group-title="Avi JioTV",B4U Kadak
http://'.$ipadd.'/live.php?c=B4U_Kadak&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png" group-title="Avi JioTV",B4U Bhojpuri
http://'.$ipadd.'/live.php?c=B4U_Bhojpuri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png" group-title="Avi JioTV",MI TV
http://'.$ipadd.'/live.php?c=MI_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" group-title="Avi JioTV",Raj Pariwar
http://'.$ipadd.'/live.php?c=Raj_Pariwar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Orange_TV.png" group-title="Avi JioTV",Orange TV
http://'.$ipadd.'/live.php?c=Orange_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png" group-title="Avi JioTV",Insync
http://'.$ipadd.'/live.php?c=Insync&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png" group-title="Avi JioTV",iLove
http://'.$ipadd.'/live.php?c=iLove&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png" group-title="Avi JioTV",ANB News
http://'.$ipadd.'/live.php?c=ANB_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png" group-title="Avi JioTV",Prarthana Bhawan
http://'.$ipadd.'/live.php?c=Prarthana_Bhawan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png" group-title="Avi JioTV",Shubhsandesh TV
http://'.$ipadd.'/live.php?c=Shubhsandesh_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png" group-title="Avi JioTV",Darshan 24
http://'.$ipadd.'/live.php?c=Darshan_24&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png" group-title="Avi JioTV",Divya TV
http://'.$ipadd.'/live.php?c=Divya_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/School_Education_Nagaland.png" group-title="Avi JioTV",School Education Nagaland
http://'.$ipadd.'/live.php?c=School_Education_Nagaland&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png" group-title="Avi JioTV",Birla Brainiacs
http://'.$ipadd.'/live.php?c=Birla_Brainiacs&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png" group-title="Avi JioTV",Network 10
http://'.$ipadd.'/live.php?c=Network_10&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" group-title="Avi JioTV",Sony Pix SD
http://'.$ipadd.'/live.php?c=Sony_Pix_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png" group-title="Avi JioTV",Gyanvani 1
http://'.$ipadd.'/live.php?c=Gyanvani_1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Chardham_Darshan.png" group-title="Avi JioTV",Chardham Darshan
http://'.$ipadd.'/live.php?c=Chardham_Darshan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png" group-title="Avi JioTV",Tute
http://'.$ipadd.'/live.php?c=Tute&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png" group-title="Avi JioTV",Himshiksha Elementary
http://'.$ipadd.'/live.php?c=Himshiksha_Elementary&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png" group-title="Avi JioTV",Himshiksha Higher
http://'.$ipadd.'/live.php?c=Himshiksha_Higher&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png" group-title="Avi JioTV",Himshiksha Vocational
http://'.$ipadd.'/live.php?c=Himshiksha_Vocational&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png" group-title="Avi JioTV",AP-BIE-ARTS
http://'.$ipadd.'/live.php?c=AP_BIE_ARTS&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png" group-title="Avi JioTV",AP-BIE-SCIENCE
http://'.$ipadd.'/live.php?c=AP_BIE_SCIENCE&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png" group-title="Avi JioTV",AP-CIE-SIVE
http://'.$ipadd.'/live.php?c=AP_CIE_SIVE&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" group-title="Avi JioTV",Colors Infinity SD
http://'.$ipadd.'/live.php?c=Colors_Infinity_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" group-title="Avi JioTV",Comedy Central SD
http://'.$ipadd.'/live.php?c=Comedy_Central_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" group-title="Avi JioTV",Sony Wah
http://'.$ipadd.'/live.php?c=Sony_Wah&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" group-title="Avi JioTV",Sony SD
http://'.$ipadd.'/live.php?c=Sony_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png" group-title="Avi JioTV",SongDew TV
http://'.$ipadd.'/live.php?c=SongDew_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png" group-title="Avi JioTV",1Sports
http://'.$ipadd.'/live.php?c=1Sports&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png" group-title="Avi JioTV",Santvani
http://'.$ipadd.'/live.php?c=Santvani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png" group-title="Avi JioTV",Nandighosha
http://'.$ipadd.'/live.php?c=Nandighosha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png" group-title="Avi JioTV",Velukkudi Discourses
http://'.$ipadd.'/live.php?c=Velukkudi_Discourses&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_Marathi.png" group-title="Avi JioTV",Dnyanganga 10th Marathi
http://'.$ipadd.'/live.php?c=Mahawani_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_English.png" group-title="Avi JioTV",Dnyanganga 12th Science
http://'.$ipadd.'/live.php?c=Mahawani_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/M_lead.png" group-title="Avi JioTV",M-LEAD
http://'.$ipadd.'/live.php?c=M_lead&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png" group-title="Avi JioTV",Rishtey Cineplex
http://'.$ipadd.'/live.php?c=Rishtey_Cineplex&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png" group-title="Avi JioTV",Balle Balle TV
http://'.$ipadd.'/live.php?c=Balle_Balle_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_3_4_Mar_Eng_Urdhu.png" group-title="Avi JioTV",Dnyanganga 3rd-4th Mar-Eng-Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_3_4_Mar_Eng_Urdhu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_5_Mar_Eng_Urdhu.png" group-title="Avi JioTV",Dnyanganga 5th Mar-Eng-Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_5_Mar_Eng_Urdhu&q=800&e=.m3u8';
fwrite($playlist, $modlist);

$modlist='

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_6_Mar_Eng_Urdhu.png" group-title="Avi JioTV",Dnyanganga 6th Mar-Eng-Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_6_Mar_Eng_Urdhu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_7_Mar_Eng_Urdhu.png" group-title="Avi JioTV",Dnyanganga 7th Mar-Eng-Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_7_Mar_Eng_Urdhu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_8_Mar_Eng_Urdhu.png" group-title="Avi JioTV",Dnyanganga 8th Mar-Eng-Urdu
http://'.$ipadd.'/live.php?c=Dnyanganga_8_Mar_Eng_Urdhu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Marathi_Medium.png" group-title="Avi JioTV",Dnyanganga 9th Marathi
http://'.$ipadd.'/live.php?c=Dnyanganga_9_Marathi_Medium&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png" group-title="Avi JioTV",History TV18 SD
http://'.$ipadd.'/live.php?c=History_TV18_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" group-title="Avi JioTV",Surya Bhojpuri
http://'.$ipadd.'/live.php?c=Surya_Bhojpuri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png" group-title="Avi JioTV",RadheKrishna TV
http://'.$ipadd.'/live.php?c=RadheKrishna_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png" group-title="Avi JioTV",Subharti
http://'.$ipadd.'/live.php?c=Subharti&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_Darshan.png" group-title="Avi JioTV",Shiksha Darshan
http://'.$ipadd.'/live.php?c=Shiksha_Darshan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png" group-title="Avi JioTV",Punjab School TV
http://'.$ipadd.'/live.php?c=Punjab_School_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png" group-title="Avi JioTV",News First
http://'.$ipadd.'/live.php?c=News_First&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png" group-title="Avi JioTV",ABP Sanjha
http://'.$ipadd.'/live.php?c=ABP_Sanjha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png" group-title="Avi JioTV",IBN Lokmat
http://'.$ipadd.'/live.php?c=IBN_Lokmat&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png" group-title="Avi JioTV",Aastha
http://'.$ipadd.'/live.php?c=Aastha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Siddhivinayak.png" group-title="Avi JioTV",Shree Siddhivinayak
http://'.$ipadd.'/live.php?c=Siddhivinayak&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png" group-title="Avi JioTV",Sanskar
http://'.$ipadd.'/live.php?c=Sanskar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png" group-title="Avi JioTV",Disha tv
http://'.$ipadd.'/live.php?c=Disha_tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png" group-title="Avi JioTV",Paras tv
http://'.$ipadd.'/live.php?c=Paras_tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png" group-title="Avi JioTV",mh1 Shraddha
http://'.$ipadd.'/live.php?c=mh1_Shraddha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png" group-title="Avi JioTV",Sadhna
http://'.$ipadd.'/live.php?c=Sadhna&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png" group-title="Avi JioTV",Peace of Mind
http://'.$ipadd.'/live.php?c=Peace_of_Mind&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png" group-title="Avi JioTV",Jinvani TV
http://'.$ipadd.'/live.php?c=Jinvani_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png" group-title="Avi JioTV",Arihant TV
http://'.$ipadd.'/live.php?c=Arihant_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png" group-title="Avi JioTV",Ishwar TV
http://'.$ipadd.'/live.php?c=Ishwar_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png" group-title="Avi JioTV",Satsang TV
http://'.$ipadd.'/live.php?c=Satsang_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png" group-title="Avi JioTV",Shubh TV
http://'.$ipadd.'/live.php?c=Shubh_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png" group-title="Avi JioTV",Aastha Bhajan
http://'.$ipadd.'/live.php?c=Aastha_Bhajan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png" group-title="Avi JioTV",Vedic TV
http://'.$ipadd.'/live.php?c=Vedic_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png" group-title="Avi JioTV",News18 UP
http://'.$ipadd.'/live.php?c=ETV_UP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png" group-title="Avi JioTV",News18 BIHAR
http://'.$ipadd.'/live.php?c=ETV_BIHAR&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" group-title="Avi JioTV",Dabangg
http://'.$ipadd.'/live.php?c=Dabangg&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png" group-title="Avi JioTV",Sangeet Bhojpuri
http://'.$ipadd.'/live.php?c=Sangeet_Bhojpuri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png" group-title="Avi JioTV",Oscar Movies
http://'.$ipadd.'/live.php?c=Oscar_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png" group-title="Avi JioTV",Bhojpuri Cinema
http://'.$ipadd.'/live.php?c=Bhojpuri_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" group-title="Avi JioTV",Dishum TV
http://'.$ipadd.'/live.php?c=Dishum_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png" group-title="Avi JioTV",News18 RAJASTHAN
http://'.$ipadd.'/live.php?c=ETV_RAJASTHAN&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png" group-title="Avi JioTV",Zee Rajasthan
http://'.$ipadd.'/live.php?c=Zee_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png" group-title="Avi JioTV",First India News
http://'.$ipadd.'/live.php?c=First_India_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png" group-title="Avi JioTV",News18 MP
http://'.$ipadd.'/live.php?c=ETV_MP&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png" group-title="Avi JioTV",IBC24
http://'.$ipadd.'/live.php?c=IBC-24&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png" group-title="Avi JioTV",Zee News MP Chattisgarh
http://'.$ipadd.'/live.php?c=Zee_News_MP_Chattisgarh&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png" group-title="Avi JioTV",Bansal News
http://'.$ipadd.'/live.php?c=Bansal_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png" group-title="Avi JioTV",News18 Urdu
http://'.$ipadd.'/live.php?c=ETV_Urdu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" group-title="Avi JioTV",Zee Salaam
http://'.$ipadd.'/live.php?c=Zee_Salaam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png" group-title="Avi JioTV",Channel Win
http://'.$ipadd.'/live.php?c=Channel_Win&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png" group-title="Avi JioTV",Gulistan News
http://'.$ipadd.'/live.php?c=Gulistan_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png" group-title="Avi JioTV",DD bharati
http://'.$ipadd.'/live.php?c=DD_bharati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" group-title="Avi JioTV",DD Bihar
http://'.$ipadd.'/live.php?c=DD_Bihar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" group-title="Avi JioTV",DD Madhya Pradesh
http://'.$ipadd.'/live.php?c=DD_Madhya_Pradesh&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" group-title="Avi JioTV",DD Rajasthan (Jaipur)
http://'.$ipadd.'/live.php?c=DD_Rajasthan_Jaipur&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Barker.png" group-title="Avi JioTV",Jio Promo HD
http://'.$ipadd.'/live.php?c=Barker&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" group-title="Avi JioTV",Colors Marathi HD
http://'.$ipadd.'/live.php?c=Colors_Marathi_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" group-title="Avi JioTV",Zee Marathi
http://'.$ipadd.'/live.php?c=Zee_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png" group-title="Avi JioTV",ABP Majha
http://'.$ipadd.'/live.php?c=ABP_Majha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png" group-title="Avi JioTV",Zee 24 Taas
http://'.$ipadd.'/live.php?c=Zee_24_Taas&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" group-title="Avi JioTV",Zee Yuva
http://'.$ipadd.'/live.php?c=Zee_Yuva&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png" group-title="Avi JioTV",Zee Talkies
http://'.$ipadd.'/live.php?c=Zee_Talkies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" group-title="Avi JioTV",Sony Marathi SD
http://'.$ipadd.'/live.php?c=Sony_Marathi_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" group-title="Avi JioTV",Saam Tv
http://'.$ipadd.'/live.php?c=Saam_Tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png" group-title="Avi JioTV",9x Jhakaas
http://'.$ipadd.'/live.php?c=9x_Jhakaas&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" group-title="Avi JioTV",Maiboli
http://'.$ipadd.'/live.php?c=Maiboli&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png" group-title="Avi JioTV",TV9 Maharashtra
http://'.$ipadd.'/live.php?c=TV9_Maharashtra&q=800&e=.m3u8';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png" group-title="Avi JioTV",Sangeet Marathi
http://'.$ipadd.'/live.php?c=Sangeet_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png" group-title="Avi JioTV",Fakt Marathi
http://'.$ipadd.'/live.php?c=Fakt_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png" group-title="Avi JioTV",MKN
http://'.$ipadd.'/live.php?c=MK_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png" group-title="Avi JioTV",Amaar Cinema
http://'.$ipadd.'/live.php?c=Amaar_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_Aryan_News.png" group-title="Avi JioTV",Sadhna News TV
http://'.$ipadd.'/live.php?c=Sadhna_Aryan_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png" group-title="Avi JioTV",Discovery Channel Bengali
http://'.$ipadd.'/live.php?c=Discovery_Channel_Bengali&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" group-title="Avi JioTV",DD Sahayadri
http://'.$ipadd.'/live.php?c=DD_Sahayadri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png" group-title="Avi JioTV",ABP Ananda
http://'.$ipadd.'/live.php?c=ABP_Ananda&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" group-title="Avi JioTV",Colors Bengali HD
http://'.$ipadd.'/live.php?c=Colors_Bengali_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" group-title="Avi JioTV",Zee Bangla
http://'.$ipadd.'/live.php?c=Zee_Bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" group-title="Avi JioTV",Aakash Aath
http://'.$ipadd.'/live.php?c=Aakaash_bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png" group-title="Avi JioTV",24 Ghanta TV
http://'.$ipadd.'/live.php?c=24_Ghanta_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" group-title="Avi JioTV",Sony aath
http://'.$ipadd.'/live.php?c=Sony_aath&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png" group-title="Avi JioTV",Sangeet Bangla
http://'.$ipadd.'/live.php?c=Sangeet_Bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png" group-title="Avi JioTV",Zee Bangla Cinema
http://'.$ipadd.'/live.php?c=Zee_Bangla_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png" group-title="Avi JioTV",News18 Bangla News
http://'.$ipadd.'/live.php?c=ETV_Bangla_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png" group-title="Avi JioTV",News Time TV
http://'.$ipadd.'/live.php?c=News_Time_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png" group-title="Avi JioTV",Sakshi tv
http://'.$ipadd.'/live.php?c=Sakshi_tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" group-title="Avi JioTV",Zee Telugu
http://'.$ipadd.'/live.php?c=Zee_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png" group-title="Avi JioTV",Studio One
http://'.$ipadd.'/live.php?c=Studio_One&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" group-title="Avi JioTV",ETV Telugu
http://'.$ipadd.'/live.php?c=ETV_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png" group-title="Avi JioTV",ETV Andhra pradesh
http://'.$ipadd.'/live.php?c=ETV_Andhra_pradesh&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" group-title="Avi JioTV",Jaya TV HD
http://'.$ipadd.'/live.php?c=Jaya_TV_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png" group-title="Avi JioTV",TV 5 News
http://'.$ipadd.'/live.php?c=TV_5_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png" group-title="Avi JioTV",TV9 Telugu News
http://'.$ipadd.'/live.php?c=TV9_Telugu_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png" group-title="Avi JioTV",NTV
http://'.$ipadd.'/live.php?c=NTV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png" group-title="Avi JioTV",ABN Andhra Jyothi
http://'.$ipadd.'/live.php?c=ABN_Andhra_Jyothi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png" group-title="Avi JioTV",T News
http://'.$ipadd.'/live.php?c=T_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" group-title="Avi JioTV",Puthu Yugam
http://'.$ipadd.'/live.php?c=Puthu_Yugam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png" group-title="Avi JioTV",V6 News
http://'.$ipadd.'/live.php?c=V6_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" group-title="Avi JioTV",MK TV
http://'.$ipadd.'/live.php?c=MK_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png" group-title="Avi JioTV",Bhakti TV
http://'.$ipadd.'/live.php?c=Bhakti_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png" group-title="Avi JioTV",Subhavartha TV
http://'.$ipadd.'/live.php?c=Subhavartha_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png" group-title="Avi JioTV",Nireekshana TV
http://'.$ipadd.'/live.php?c=Nireekshana_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png" group-title="Avi JioTV",ETV Telangana
http://'.$ipadd.'/live.php?c=ETV_Telangana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png" group-title="Avi JioTV",HM TV
http://'.$ipadd.'/live.php?c=HM_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png" group-title="Avi JioTV",ETV Cinema
http://'.$ipadd.'/live.php?c=ETV_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" group-title="Avi JioTV",ETV Plus
http://'.$ipadd.'/live.php?c=ETV_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png" group-title="Avi JioTV",ETV Life
http://'.$ipadd.'/live.php?c=ETV_Life&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png" group-title="Avi JioTV",ETV Abhiruchi
http://'.$ipadd.'/live.php?c=ETV_Abhiruchi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png" group-title="Avi JioTV",Zee Cinemalu
http://'.$ipadd.'/live.php?c=Zee_Cinemalu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png" group-title="Avi JioTV",Raj News&nbsp;24x7
http://'.$ipadd.'/live.php?c=Raj_News_24x7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png" group-title="Avi JioTV",CVR English
http://'.$ipadd.'/live.php?c=CVR_English&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png" group-title="Avi JioTV",CVR News
http://'.$ipadd.'/live.php?c=CVR_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png" group-title="Avi JioTV",CVR Health
http://'.$ipadd.'/live.php?c=CVR_Health&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png" group-title="Avi JioTV",CVR OM Spiritual
http://'.$ipadd.'/live.php?c=CVR_OM_Spiritual&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png" group-title="Avi JioTV",Raj News Telugu
http://'.$ipadd.'/live.php?c=Raj_News_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" group-title="Avi JioTV",Vissa TV
http://'.$ipadd.'/live.php?c=Vissa_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png" group-title="Avi JioTV",10 TV
http://'.$ipadd.'/live.php?c=10_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png" group-title="Avi JioTV",Aradhana TV
http://'.$ipadd.'/live.php?c=Aradhana_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png" group-title="Avi JioTV",Vanitha
http://'.$ipadd.'/live.php?c=Vanitha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png" group-title="Avi JioTV",Raj Music Telugu
http://'.$ipadd.'/live.php?c=Raj_Music_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV1.png" group-title="Avi JioTV",TV1
http://'.$ipadd.'/live.php?c=TV1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png" group-title="Avi JioTV",I News
http://'.$ipadd.'/live.php?c=I_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png" group-title="Avi JioTV",MK Music
http://'.$ipadd.'/live.php?c=MK_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png" group-title="Avi JioTV",History TV18 HD Tamil
http://'.$ipadd.'/live.php?c=History_18_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" group-title="Avi JioTV",Sony BBC Earth HD Tamil
http://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" group-title="Avi JioTV",DD Saptagiri
http://'.$ipadd.'/live.php?c=DD_Saptagiri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" group-title="Avi JioTV",Zee Tamil
http://'.$ipadd.'/live.php?c=Zee_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" group-title="Avi JioTV",Kalaignar TV
http://'.$ipadd.'/live.php?c=Kalaignar_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" group-title="Avi JioTV",Raj TV
http://'.$ipadd.'/live.php?c=Raj_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png" group-title="Avi JioTV",Puthiya Thalimurai
http://'.$ipadd.'/live.php?c=Puthiya_Thalimurai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" group-title="Avi JioTV",Vasanth TV
http://'.$ipadd.'/live.php?c=Vasanth_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png" group-title="Avi JioTV",Jaya Max
http://'.$ipadd.'/live.php?c=Jaya_Max&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" group-title="Avi JioTV",Polimer TV
http://'.$ipadd.'/live.php?c=Polimer_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png" group-title="Avi JioTV",Thanthi TV
http://'.$ipadd.'/live.php?c=Thanthi_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" group-title="Avi JioTV",Makkal TV
http://'.$ipadd.'/live.php?c=Makkal_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png" group-title="Avi JioTV",Jaya Plus
http://'.$ipadd.'/live.php?c=Jaya_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png" group-title="Avi JioTV",J Movies
http://'.$ipadd.'/live.php?c=J_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png" group-title="Avi JioTV",News7 Tamil
http://'.$ipadd.'/live.php?c=News7_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png" group-title="Avi JioTV",Polimer News
http://'.$ipadd.'/live.php?c=Polimer_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png" group-title="Avi JioTV",News 18 Tamilnadu
http://'.$ipadd.'/live.php?c=News_18_Tamilnadu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png" group-title="Avi JioTV",Kalaignar Seithigal 
http://'.$ipadd.'/live.php?c=Kalaignar_Seithigal_&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png" group-title="Avi JioTV",Raj Digital Plus
http://'.$ipadd.'/live.php?c=Raj_Digital_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png" group-title="Avi JioTV",Raj Musix
http://'.$ipadd.'/live.php?c=Raj_Musix&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" group-title="Avi JioTV",Colors Tamil HD
http://'.$ipadd.'/live.php?c=Colors_Tamil_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png" group-title="Avi JioTV",Dighvijay TV
http://'.$ipadd.'/live.php?c=Dighvijay_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png" group-title="Avi JioTV",Sathiyam TV
http://'.$ipadd.'/live.php?c=Sathiyam&q=800&e=.m3u8';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png" group-title="Avi JioTV",Captain News
http://'.$ipadd.'/live.php?c=Captain_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png" group-title="Avi JioTV",Malai Murasu
http://'.$ipadd.'/live.php?c=Malai_Murasu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" group-title="Avi JioTV",Captain tv
http://'.$ipadd.'/live.php?c=Captain_tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png" group-title="Avi JioTV",Sahana Music
http://'.$ipadd.'/live.php?c=Sahana_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png" group-title="Avi JioTV",Nambikkai
http://'.$ipadd.'/live.php?c=Nambikkai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png" group-title="Avi JioTV",Travel XP Tamil
http://'.$ipadd.'/live.php?c=Travel_XP_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" group-title="Avi JioTV",Vendhar TV
http://'.$ipadd.'/live.php?c=Vendhar_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" group-title="Avi JioTV",DD5 Podhigai
http://'.$ipadd.'/live.php?c=DD5_Podhigai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" group-title="Avi JioTV",Colors Kannada HD
http://'.$ipadd.'/live.php?c=Colors_Kannada_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png" group-title="Avi JioTV",TV9 Karnataka
http://'.$ipadd.'/live.php?c=TV9_Karnataka&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" group-title="Avi JioTV",Zee Kannada
http://'.$ipadd.'/live.php?c=Zee_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" group-title="Avi JioTV",Kasturi
http://'.$ipadd.'/live.php?c=Kasturi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png" group-title="Avi JioTV",Public TV
http://'.$ipadd.'/live.php?c=Public_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png" group-title="Avi JioTV",News18 Kannada News
http://'.$ipadd.'/live.php?c=ETV_Kannada_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" group-title="Avi JioTV",Colors Super
http://'.$ipadd.'/live.php?c=Colors_Super&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png" group-title="Avi JioTV",Raj Music Kannada
http://'.$ipadd.'/live.php?c=Raj_Music_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png" group-title="Avi JioTV",Sri Sankara
http://'.$ipadd.'/live.php?c=Sri_Sankara&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png" group-title="Avi JioTV",Public Music
http://'.$ipadd.'/live.php?c=Public_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png" group-title="Avi JioTV",Raj News Kannada
http://'.$ipadd.'/live.php?c=Raj_News_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png" group-title="Avi JioTV",Maha News
http://'.$ipadd.'/live.php?c=Maha_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png" group-title="Avi JioTV",History TV18 HD Telugu
http://'.$ipadd.'/live.php?c=History_18_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" group-title="Avi JioTV",Sony BBC Earth HD Telugu
http://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png" group-title="Avi JioTV",Discovery Channel Telugu
http://'.$ipadd.'/live.php?c=Discovery_Channel_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png" group-title="Avi JioTV",Sri Venkateshwar Bhakti
http://'.$ipadd.'/live.php?c=Sri_Venkateshwar_Bhakti&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png" group-title="Avi JioTV",Divya Vani
http://'.$ipadd.'/live.php?c=Divya_Vani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" group-title="Avi JioTV",DD9 chandana (kannada)
http://'.$ipadd.'/live.php?c=DD9_chandana_kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" group-title="Avi JioTV",Colors Gujarati
http://'.$ipadd.'/live.php?c=Colors_Gujarati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png" group-title="Avi JioTV",Tv 9 Gujarat
http://'.$ipadd.'/live.php?c=Tv_9_Gujarat&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png" group-title="Avi JioTV",GS TV
http://'.$ipadd.'/live.php?c=GS_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png" group-title="Avi JioTV",Sandesh News
http://'.$ipadd.'/live.php?c=Sandesh_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png" group-title="Avi JioTV",CNBC Bazaar (MNO)
http://'.$ipadd.'/live.php?c=CNBC_Bazaar_MNO&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png" group-title="Avi JioTV",News18 Gujarati
http://'.$ipadd.'/live.php?c=ETV_News_Gujarati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png" group-title="Avi JioTV",ABP Asmita
http://'.$ipadd.'/live.php?c=ABP_Asmita&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png" group-title="Avi JioTV",VTV Gujarati
http://'.$ipadd.'/live.php?c=VTV_Gujarati&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png" group-title="Avi JioTV",Zee 24 Kalak
http://'.$ipadd.'/live.php?c=Zee_24_Kalak&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" group-title="Avi JioTV",DD Girnar
http://'.$ipadd.'/live.php?c=DD_Girnar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" group-title="Avi JioTV",Colors Oriya
http://'.$ipadd.'/live.php?c=Colors_Oriya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_TV.png" group-title="Avi JioTV",Tarang TV
http://'.$ipadd.'/live.php?c=Tarang_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_Music.png" group-title="Avi JioTV",Tarang Music
http://'.$ipadd.'/live.php?c=Tarang_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/OTV_Odisha_TV.png" group-title="Avi JioTV",OTV (Odisha TV)
http://'.$ipadd.'/live.php?c=OTV_Odisha_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" group-title="Avi JioTV",Zee Odisha
http://'.$ipadd.'/live.php?c=Sarthak_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prathana_TV.png" group-title="Avi JioTV",Prathana TV
http://'.$ipadd.'/live.php?c=Prathana_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png" group-title="Avi JioTV",Zee Kalinga
http://'.$ipadd.'/live.php?c=Zee_Kalinga&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png" group-title="Avi JioTV",Kanak News
http://'.$ipadd.'/live.php?c=Kanak_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png" group-title="Avi JioTV",Kalinga TV
http://'.$ipadd.'/live.php?c=Kalinga_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png" group-title="Avi JioTV",Prameya News 7
http://'.$ipadd.'/live.php?c=Prameya_News_7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png" group-title="Avi JioTV",News18 Oriya
http://'.$ipadd.'/live.php?c=ETV_News_Oriya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Alankar_TV.png" group-title="Avi JioTV",Alankar TV
http://'.$ipadd.'/live.php?c=Alankar_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png" group-title="Avi JioTV",MBC
http://'.$ipadd.'/live.php?c=MBC&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png" group-title="Avi JioTV",Naxatra News
http://'.$ipadd.'/live.php?c=Naxatra_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" group-title="Avi JioTV",DD Oriya
http://'.$ipadd.'/live.php?c=DD_Oriya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_SD.png" group-title="Avi JioTV",Asianet
http://'.$ipadd.'/live.php?c=Asianet_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" group-title="Avi JioTV",Amrita TV
http://'.$ipadd.'/live.php?c=Amrita_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" group-title="Avi JioTV",Mazavali Manorama HD
http://'.$ipadd.'/live.php?c=Mazavali_Manorama_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" group-title="Avi JioTV",Mazhavil Manorama
http://'.$ipadd.'/live.php?c=Mazhavil_Manorama&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" group-title="Avi JioTV",Kairali TV
http://'.$ipadd.'/live.php?c=Kairali_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png" group-title="Avi JioTV",mh1 (Music)
http://'.$ipadd.'/live.php?c=mh1_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.PNG" group-title="Avi JioTV",Kairali News
http://'.$ipadd.'/live.php?c=Kairali_People_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png" group-title="Avi JioTV",Manorama News
http://'.$ipadd.'/live.php?c=Manorama_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png" group-title="Avi JioTV",Mathrubhumi News
http://'.$ipadd.'/live.php?c=Mathrubhumi_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png" group-title="Avi JioTV",Jaihind tv
http://'.$ipadd.'/live.php?c=Jaihind_tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png" group-title="Avi JioTV",Jeevan TV
http://'.$ipadd.'/live.php?c=Jeevan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png" group-title="Avi JioTV",Kappa TV
http://'.$ipadd.'/live.php?c=Kappa_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" group-title="Avi JioTV",Flower TV
http://'.$ipadd.'/live.php?c=Flower_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png" group-title="Avi JioTV",GoodNews Channel
http://'.$ipadd.'/live.php?c=GoodNews_Channel&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png" group-title="Avi JioTV",Janam TV
http://'.$ipadd.'/live.php?c=Janam_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png" group-title="Avi JioTV",Shalom
http://'.$ipadd.'/live.php?c=Shalom&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png" group-title="Avi JioTV",Kaumudy TV
http://'.$ipadd.'/live.php?c=Kaumudy_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" group-title="Avi JioTV",Kairali WE TV
http://'.$ipadd.'/live.php?c=Kairali_WE_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png" group-title="Avi JioTV",News 18 Kerala
http://'.$ipadd.'/live.php?c=News_18_Kerala&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png" group-title="Avi JioTV",Raj Music Malayalam
http://'.$ipadd.'/live.php?c=Raj_Music_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png" group-title="Avi JioTV",Raj News Malayalam
http://'.$ipadd.'/live.php?c=Raj_News_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" group-title="Avi JioTV",Dillagi TV
http://'.$ipadd.'/live.php?c=Dillagi_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" group-title="Avi JioTV",Dhamaal TV
http://'.$ipadd.'/live.php?c=Dhamaal_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" group-title="Avi JioTV",Andy Haryana
http://'.$ipadd.'/live.php?c=Andy_Haryana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" group-title="Avi JioTV",Manoranjan Grand
http://'.$ipadd.'/live.php?c=Manoranjan_Grand&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png" group-title="Avi JioTV",Zee Purvaiya
http://'.$ipadd.'/live.php?c=Zee_Purvaiya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png" group-title="Avi JioTV",Zee Punjabi HP Haryana
http://'.$ipadd.'/live.php?c=Zee_Punjabi_HP_Haryana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png" group-title="Avi JioTV",PTC News
http://'.$ipadd.'/live.php?c=PTC_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png" group-title="Avi JioTV",News18 Haryana and HP News
http://'.$ipadd.'/live.php?c=ETV_Haryana_and_HP_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" group-title="Avi JioTV",PTC Punjabi
http://'.$ipadd.'/live.php?c=PTC_Punjabi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png" group-title="Avi JioTV",PTC Chak De
http://'.$ipadd.'/live.php?c=PTC_Chak_De&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png" group-title="Avi JioTV",9X Tashan
http://'.$ipadd.'/live.php?c=9X_Tashan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png" group-title="Avi JioTV",Chardikla Time TV
http://'.$ipadd.'/live.php?c=Chardikla_Time_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png" group-title="Avi JioTV",Pitaara
http://'.$ipadd.'/live.php?c=Pitaara&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png" group-title="Avi JioTV",Manoranjan Movies
http://'.$ipadd.'/live.php?c=Manoranjan_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png" group-title="Avi JioTV",Khushboo TV
http://'.$ipadd.'/live.php?c=Khusboo_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" group-title="Avi JioTV",DD Punjabi
http://'.$ipadd.'/live.php?c=DD_Punjabi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png" group-title="Avi JioTV",DY 365
http://'.$ipadd.'/live.php?c=DY_365&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" group-title="Avi JioTV",Nepal one
http://'.$ipadd.'/live.php?c=Nepal_one&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" group-title="Avi JioTV",Rang
http://'.$ipadd.'/live.php?c=Rang&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" group-title="Avi JioTV",Jonack
http://'.$ipadd.'/live.php?c=Jonack&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png" group-title="Avi JioTV",News 18 Assam
http://'.$ipadd.'/live.php?c=News_18_Assam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png" group-title="Avi JioTV",Ramdhenu
http://'.$ipadd.'/live.php?c=Ramdhenu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png" group-title="Avi JioTV",Assam Talks
http://'.$ipadd.'/live.php?c=Assam_Talks&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" group-title="Avi JioTV",Rengoni
http://'.$ipadd.'/live.php?c=Rengoni&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png" group-title="Avi JioTV",North East Live
http://'.$ipadd.'/live.php?c=North_East_Live&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png" group-title="Avi JioTV",Twenty Four News
http://'.$ipadd.'/live.php?c=Twenty_Four_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_BHARATVARSH.png" group-title="Avi JioTV",TV9 Bharatvarsh
http://'.$ipadd.'/live.php?c=TV9_Bharatvarsh&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png" group-title="Avi JioTV",Tehzeeb TV
http://'.$ipadd.'/live.php?c=Tehzeeb_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png" group-title="Avi JioTV",Kolkata Live
http://'.$ipadd.'/live.php?c=Kolkata_Live&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png" group-title="Avi JioTV",Aastha Telugu
http://'.$ipadd.'/live.php?c=Aastha_Telugu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png" group-title="Avi JioTV",Aastha Tamil
http://'.$ipadd.'/live.php?c=Aastha_Tamil&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png" group-title="Avi JioTV",Aastha Kannada
http://'.$ipadd.'/live.php?c=Aastha_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Samachar.png" group-title="Avi JioTV",Surya Samachar
http://'.$ipadd.'/live.php?c=Surya_Samachar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Cinema.png" group-title="Avi JioTV",Surya Cinema
http://'.$ipadd.'/live.php?c=Surya_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhakti.png" group-title="Avi JioTV",Surya Bhakti
http://'.$ipadd.'/live.php?c=Surya_Bhakti&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png" group-title="Avi JioTV",Ctvn Akd Plus
http://'.$ipadd.'/live.php?c=Ctvn_Akd_Plus&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png" group-title="Avi JioTV",Calcutta News
http://'.$ipadd.'/live.php?c=Calcutta_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png" group-title="Avi JioTV",Total Tv Haryana
http://'.$ipadd.'/live.php?c=Total_Tv_Haryana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png" group-title="Avi JioTV",Kolkata TV
http://'.$ipadd.'/live.php?c=Kolkata_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" group-title="Avi JioTV",Sony Max SD
http://'.$ipadd.'/live.php?c=SET_MAX&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" group-title="Avi JioTV",Sony BBC Earth SD
http://'.$ipadd.'/live.php?c=Sony_BBC_Earth_SD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png" group-title="Avi JioTV",BBC Marathi
http://'.$ipadd.'/live.php?c=BBC_Marathi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Millionlights.png" group-title="Avi JioTV",Millionlights
http://'.$ipadd.'/live.php?c=Millionlights&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png" group-title="Avi JioTV",Swayam Prabha 01
http://'.$ipadd.'/live.php?c=Swayam_Prabha_01&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png" group-title="Avi JioTV",Swayam Prabha 02
http://'.$ipadd.'/live.php?c=Swayam_Prabha_02&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png" group-title="Avi JioTV",Swayam Prabha 03
http://'.$ipadd.'/live.php?c=Swayam_Prabha_03&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cinema.png" group-title="Avi JioTV",JioCinema
http://'.$ipadd.'/live.php?c=Jio_Cinema&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png" group-title="Avi JioTV",BTV
http://'.$ipadd.'/live.php?c=BTV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png" group-title="Avi JioTV",Newslive
http://'.$ipadd.'/live.php?c=Newslive&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png" group-title="Avi JioTV",PTC Music
http://'.$ipadd.'/live.php?c=PTC_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png" group-title="Avi JioTV",Samara News
http://'.$ipadd.'/live.php?c=Samara_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png" group-title="Avi JioTV",Ayush TV
http://'.$ipadd.'/live.php?c=Ayush_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png" group-title="Avi JioTV",Desi Channel
http://'.$ipadd.'/live.php?c=Desi_Channel&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png" group-title="Avi JioTV",Sai TV
http://'.$ipadd.'/live.php?c=SaiTV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png" group-title="Avi JioTV",Lakshya TV
http://'.$ipadd.'/live.php?c=Lakshya_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png" group-title="Avi JioTV",Angel TV HD
http://'.$ipadd.'/live.php?c=Angel_TV_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png" group-title="Avi JioTV",PTC Simran
http://'.$ipadd.'/live.php?c=PTC_Simran&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png" group-title="Avi JioTV",Sai Leela
http://'.$ipadd.'/live.php?c=Sai_Leela&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png" group-title="Avi JioTV",Hindu Dharmam
http://'.$ipadd.'/live.php?c=Hindu_Dharmam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png" group-title="Avi JioTV",Mercy TV
http://'.$ipadd.'/live.php?c=Rujumargam_TV&q=800&e=.m3u8';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png" group-title="Avi JioTV",Calvary
http://'.$ipadd.'/live.php?c=Calvary&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png" group-title="Avi JioTV",Swayam Prabha 04
http://'.$ipadd.'/live.php?c=Swayam_Prabha_04&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png" group-title="Avi JioTV",Swayam Prabha 05
http://'.$ipadd.'/live.php?c=Swayam_Prabha_05&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png" group-title="Avi JioTV",Swayam Prabha 06
http://'.$ipadd.'/live.php?c=Swayam_Prabha_06&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png" group-title="Avi JioTV",Swayam Prabha 07
http://'.$ipadd.'/live.php?c=Swayam_Prabha_07&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png" group-title="Avi JioTV",Swayam Prabha 08
http://'.$ipadd.'/live.php?c=Swayam_Prabha_08&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png" group-title="Avi JioTV",Swayam Prabha 09
http://'.$ipadd.'/live.php?c=Swayam_Prabha_09&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png" group-title="Avi JioTV",Swayam Prabha 10
http://'.$ipadd.'/live.php?c=Swayam_Prabha_10&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png" group-title="Avi JioTV",Swayam Prabha 11
http://'.$ipadd.'/live.php?c=Swayam_Prabha_11&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png" group-title="Avi JioTV",Swayam Prabha 12
http://'.$ipadd.'/live.php?c=Swayam_Prabha_12&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png" group-title="Avi JioTV",Swayam Prabha 13
http://'.$ipadd.'/live.php?c=Swayam_Prabha_13&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png" group-title="Avi JioTV",Swayam Prabha 14
http://'.$ipadd.'/live.php?c=Swayam_Prabha_14&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png" group-title="Avi JioTV",Swayam Prabha 15
http://'.$ipadd.'/live.php?c=Swayam_Prabha_15&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png" group-title="Avi JioTV",Swayam Prabha 16
http://'.$ipadd.'/live.php?c=Swayam_Prabha_16&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png" group-title="Avi JioTV",Swayam Prabha 17
http://'.$ipadd.'/live.php?c=Swayam_Prabha_17&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png" group-title="Avi JioTV",Swayam Prabha 18
http://'.$ipadd.'/live.php?c=Swayam_Prabha_18&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png" group-title="Avi JioTV",Swayam Prabha 19
http://'.$ipadd.'/live.php?c=Swayam_Prabha_19&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png" group-title="Avi JioTV",Swayam Prabha 20
http://'.$ipadd.'/live.php?c=Swayam_Prabha_20&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png" group-title="Avi JioTV",Swayam Prabha 21
http://'.$ipadd.'/live.php?c=Swayam_Prabha_21&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png" group-title="Avi JioTV",Swayam Prabha 22
http://'.$ipadd.'/live.php?c=Swayam_Prabha_22&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png" group-title="Avi JioTV",PM e Vidya 01
http://'.$ipadd.'/live.php?c=evidya_1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png" group-title="Avi JioTV",PM e Vidya 02
http://'.$ipadd.'/live.php?c=evidya_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png" group-title="Avi JioTV",PM e Vidya 03
http://'.$ipadd.'/live.php?c=evidya_3&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png" group-title="Avi JioTV",PM e Vidya 04
http://'.$ipadd.'/live.php?c=evidya_4&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png" group-title="Avi JioTV",PM e Vidya 05
http://'.$ipadd.'/live.php?c=evidya_5&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png" group-title="Avi JioTV",PM e Vidya 06
http://'.$ipadd.'/live.php?c=evidya_6&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png" group-title="Avi JioTV",PM e Vidya 07
http://'.$ipadd.'/live.php?c=evidya_7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" group-title="Avi JioTV",DD Uttar Pradesh
http://'.$ipadd.'/live.php?c=DD_Uttar_Pradesh&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" group-title="Avi JioTV",Sanjha TV
http://'.$ipadd.'/live.php?c=Sanjha_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" group-title="Avi JioTV",Anjan TV
http://'.$ipadd.'/live.php?c=Anjan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" group-title="Avi JioTV",Garv Punjabi
http://'.$ipadd.'/live.php?c=GarvPunjabi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" group-title="Avi JioTV",JUSPunjabi
http://'.$ipadd.'/live.php?c=JUSPunjabi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" group-title="Avi JioTV",Peppers TV
http://'.$ipadd.'/live.php?c=Peppers_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" group-title="Avi JioTV",DD Bangla
http://'.$ipadd.'/live.php?c=DD_Bangla&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" group-title="Avi JioTV",DD Malayalam
http://'.$ipadd.'/live.php?c=DD_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" group-title="Avi JioTV",DD urdu
http://'.$ipadd.'/live.php?c=DD_urdu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" group-title="Avi JioTV",DD Kashir
http://'.$ipadd.'/live.php?c=DD_Kashir&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" group-title="Avi JioTV",DD13 Guwahati NE
http://'.$ipadd.'/live.php?c=DD13_Guwahati_NE&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/QYOUHD.png" group-title="Avi JioTV",The Q India
http://'.$ipadd.'/live.php?c=TheQIndia&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" group-title="Avi JioTV",Namma TV
http://'.$ipadd.'/live.php?c=Namma_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" group-title="Avi JioTV",Rangamanch
http://'.$ipadd.'/live.php?c=Rangamanch&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png" group-title="Avi JioTV",PTC Punjabi Gold 
http://'.$ipadd.'/live.php?c=PTC_Punjabi_Gold&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png" group-title="Avi JioTV",Indradhanu
http://'.$ipadd.'/live.php?c=Indradhanu&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png" group-title="Avi JioTV",Prag News
http://'.$ipadd.'/live.php?c=Prag_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png" group-title="Avi JioTV",TV 5 Kannada
http://'.$ipadd.'/live.php?c=TV_5_Kannada&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png" group-title="Avi JioTV",Tunes 6
http://'.$ipadd.'/live.php?c=Tunes_6&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png" group-title="Avi JioTV",PTC DHOL TV
http://'.$ipadd.'/live.php?c=PTC_DHOL_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png" group-title="Avi JioTV",Only Music
http://'.$ipadd.'/live.php?c=Only_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png" group-title="Avi JioTV",PBN Music
http://'.$ipadd.'/live.php?c=PBN_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png" group-title="Avi JioTV",Brit Asia
http://'.$ipadd.'/live.php?c=Brit_Asia&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png" group-title="Avi JioTV",PEACE MUSIC
http://'.$ipadd.'/live.php?c=PEACE_MUSIC&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png" group-title="Avi JioTV",Steelbird Music
http://'.$ipadd.'/live.php?c=Steelbird_Music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png" group-title="Avi JioTV",Prajaa TV
http://'.$ipadd.'/live.php?c=Prajaa_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Time.png" group-title="Avi JioTV",Bangla Time
http://'.$ipadd.'/live.php?c=Bangla_Time&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png" group-title="Avi JioTV",Media One TV
http://'.$ipadd.'/live.php?c=Media_One_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png" group-title="Avi JioTV",In Goa 24x7
http://'.$ipadd.'/live.php?c=InGoa24x7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png" group-title="Avi JioTV",Boogle Bollywood
http://'.$ipadd.'/live.php?c=Boogle_Bollywood&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png" group-title="Avi JioTV",Propex TV
http://'.$ipadd.'/live.php?c=Propex_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png" group-title="Avi JioTV",testii
http://'.$ipadd.'/live.php?c=Sakhi_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar_2.png" group-title="Avi JioTV",Bhaktisagar 2
http://'.$ipadd.'/live.php?c=Bhaktisagar_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png" group-title="Avi JioTV",Hare krsna
http://'.$ipadd.'/live.php?c=Harekrsna&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png" group-title="Avi JioTV",Swar Shree
http://'.$ipadd.'/live.php?c=Garv_Swaminarayan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Katyayani.png" group-title="Avi JioTV",Katyayani
http://'.$ipadd.'/live.php?c=Katyayani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png" group-title="Avi JioTV",Tulja Bhavani
http://'.$ipadd.'/live.php?c=Tulja_Bhavani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png" group-title="Avi JioTV",Sarv Dharam Sangam
http://'.$ipadd.'/live.php?c=Sarv_Dharam_Sangam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lord_Buddha.png" group-title="Avi JioTV",Lord Buddha
http://'.$ipadd.'/live.php?c=Lord_Buddha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.jpg" group-title="Avi JioTV",Garv Punjabi Gurbani
http://'.$ipadd.'/live.php?c=GarvGurbani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png" group-title="Avi JioTV",Fateh TV
http://'.$ipadd.'/live.php?c=Fateh_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png" group-title="Avi JioTV",Valam TV
http://'.$ipadd.'/live.php?c=Valambhakti&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png" group-title="Avi JioTV",Om Shanti
http://'.$ipadd.'/live.php?c=Om_Shanti&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png" group-title="Avi JioTV",Kartavya TV
http://'.$ipadd.'/live.php?c=Kartavya_Tv&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png" group-title="Avi JioTV",Hamari Sanskruti
http://'.$ipadd.'/live.php?c=Hamari_Sanskruti_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png" group-title="Avi JioTV",JUSOne
http://'.$ipadd.'/live.php?c=JUSOne&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png" group-title="Avi JioTV",Soham TV
http://'.$ipadd.'/live.php?c=Soham_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png" group-title="Avi JioTV",Awakening
http://'.$ipadd.'/live.php?c=Awakening&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png" group-title="Avi JioTV",SRMD HD
http://'.$ipadd.'/live.php?c=SRMD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png" group-title="Avi JioTV",Hare Krsna Music
http://'.$ipadd.'/live.php?c=Hare_Krsna_music&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png" group-title="Avi JioTV",PM e Vidya 08
http://'.$ipadd.'/live.php?c=_evidya_8&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png" group-title="Avi JioTV",PM e Vidya 09
http://'.$ipadd.'/live.php?c=_evidya_9&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png" group-title="Avi JioTV",PM e Vidya 10
http://'.$ipadd.'/live.php?c=evidya_10&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png" group-title="Avi JioTV",PM e Vidya 11
http://'.$ipadd.'/live.php?c=evidya_11&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png" group-title="Avi JioTV",Vande Gujarat 1
http://'.$ipadd.'/live.php?c=Vande_Gujarat_1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png" group-title="Avi JioTV",Vande Gujarat 2
http://'.$ipadd.'/live.php?c=Vande_Gujarat_2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png" group-title="Avi JioTV",Vande Gujarat 3
http://'.$ipadd.'/live.php?c=Vande_Gujarat_3&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png" group-title="Avi JioTV",Vande Gujarat 4
http://'.$ipadd.'/live.php?c=Vande_Gujarat_4&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png" group-title="Avi JioTV",Vande Gujarat 5
http://'.$ipadd.'/live.php?c=Vande_Gujarat_5&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png" group-title="Avi JioTV",Vande Gujarat 6
http://'.$ipadd.'/live.php?c=Vande_Gujarat_6&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png" group-title="Avi JioTV",Vande Gujarat 7
http://'.$ipadd.'/live.php?c=Vande_Gujarat_7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png" group-title="Avi JioTV",Vande Gujarat 8
http://'.$ipadd.'/live.php?c=Vande_Gujarat_8&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png" group-title="Avi JioTV",Vande Gujarat 9
http://'.$ipadd.'/live.php?c=Vande_Gujarat_9&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png" group-title="Avi JioTV",Vande Gujarat 10
http://'.$ipadd.'/live.php?c=Vande_Gujarat_10&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png" group-title="Avi JioTV",Vande Gujarat 11
http://'.$ipadd.'/live.php?c=Vande_Gujarat_11&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png" group-title="Avi JioTV",Vande Gujarat 12
http://'.$ipadd.'/live.php?c=Vande_Gujarat_12&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png" group-title="Avi JioTV",Vande Gujarat 13
http://'.$ipadd.'/live.php?c=Vande_Gujarat_13&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png" group-title="Avi JioTV",Vande Gujarat 14
http://'.$ipadd.'/live.php?c=Vande_Gujarat_14&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png" group-title="Avi JioTV",Vande Gujarat 15
http://'.$ipadd.'/live.php?c=Vande_Gujarat_15&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png" group-title="Avi JioTV",Vande Gujarat 16
http://'.$ipadd.'/live.php?c=Vande_Gujarat_16&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GSB_Worldwide.png" group-title="Avi JioTV",G S B Worldwide
http://'.$ipadd.'/live.php?c=GSB_Worldwide&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png" group-title="Avi JioTV",Ashtavinayak
http://'.$ipadd.'/live.php?c=Ashtavinayak&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Toonami.png" group-title="Avi JioTV",Testton
http://'.$ipadd.'/live.php?c=Toonami&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News11.png" group-title="Avi JioTV",News11
http://'.$ipadd.'/live.php?c=News11&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png" group-title="Avi JioTV",R Plus
http://'.$ipadd.'/live.php?c=RPLUS&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lotus_News.png" group-title="Avi JioTV",Lotus News
http://'.$ipadd.'/live.php?c=Lotus_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png" group-title="Avi JioTV",TEST1 HD
http://'.$ipadd.'/live.php?c=TEST1_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png" group-title="Avi JioTV",TEST2 HD
http://'.$ipadd.'/live.php?c=TEST2_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png" group-title="Avi JioTV",Bharat Samachar
http://'.$ipadd.'/live.php?c=Bharat_Samachar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png" group-title="Avi JioTV",Madhimugam TV
http://'.$ipadd.'/live.php?c=Madhimugam_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png" group-title="Avi JioTV",Win TV
http://'.$ipadd.'/live.php?c=Win_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png" group-title="Avi JioTV",Mantavya News
http://'.$ipadd.'/live.php?c=Mantavya_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png" group-title="Avi JioTV",4 TV
http://'.$ipadd.'/live.php?c=4_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png" group-title="Avi JioTV",News 1 India
http://'.$ipadd.'/live.php?c=News_1_India&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png" group-title="Avi JioTV",APN News
http://'.$ipadd.'/live.php?c=APN_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png" group-title="Avi JioTV",TV 100
http://'.$ipadd.'/live.php?c=TV_100&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png" group-title="Avi JioTV",A1 TV Rajasthan
http://'.$ipadd.'/live.php?c=A1_TV_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png" group-title="Avi JioTV",INH 24x7
http://'.$ipadd.'/live.php?c=INH_24x7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png" group-title="Avi JioTV",GOA 365
http://'.$ipadd.'/live.php?c=Goa365&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png" group-title="Avi JioTV",Prime News
http://'.$ipadd.'/live.php?c=Prime_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png" group-title="Avi JioTV",Prudent
http://'.$ipadd.'/live.php?c=PrudentHD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png" group-title="Avi JioTV",Khabar Fast
http://'.$ipadd.'/live.php?c=Khabar_Fast&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png" group-title="Avi JioTV",JUS 24x7
http://'.$ipadd.'/live.php?c=JUS24x7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png" group-title="Avi JioTV",RDX Goa
http://'.$ipadd.'/live.php?c=RDX_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HNN_24x7.png" group-title="Avi JioTV",HNN 24x7
http://'.$ipadd.'/live.php?c=HNN_24x7&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png" group-title="Avi JioTV",Jantantra
http://'.$ipadd.'/live.php?c=Jantantra&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png" group-title="Avi JioTV",Insight
http://'.$ipadd.'/live.php?c=Insight&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" group-title="Avi JioTV",Asianet HD
http://'.$ipadd.'/live.php?c=Asianet&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jalsa_Movies_HD.png" group-title="Avi JioTV",Jalsha Movies HD
http://'.$ipadd.'/live.php?c=Jalsa_Movies_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png" group-title="Avi JioTV",Digishala
http://'.$ipadd.'/live.php?c=Digishala&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png" group-title="Avi JioTV",Lairik
http://'.$ipadd.'/live.php?c=Manipur_Educational_Channel&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png" group-title="Avi JioTV",Meluha
http://'.$ipadd.'/live.php?c=Meluha&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vidya.png" group-title="Avi JioTV",Vidya
http://'.$ipadd.'/live.php?c=Vidya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nipuna.png" group-title="Avi JioTV",Nipuna
http://'.$ipadd.'/live.php?c=Nipuna&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat1.png" group-title="Avi JioTV",Home Learning Gujarat Standard-10
http://'.$ipadd.'/live.php?c=Home_Learning_Gujarat1&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png" group-title="Avi JioTV",KITE VICTERS
http://'.$ipadd.'/live.php?c=KITE_Victers&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png" group-title="Avi JioTV",Akal Academy Group
http://'.$ipadd.'/live.php?c=Akal_Academy_Group&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png" group-title="Avi JioTV",IMS Schools Grade 1 - 8
http://'.$ipadd.'/live.php?c=IMS_School&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png" group-title="Avi JioTV",AMMA TV
http://'.$ipadd.'/live.php?c=Amma&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png" group-title="Avi JioTV",Vedant TV
http://'.$ipadd.'/live.php?c=Vedant_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png" group-title="Avi JioTV",Haryanvi Hits
http://'.$ipadd.'/live.php?c=Haryanvi_Hits&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png" group-title="Avi JioTV",AAS Vidyalaya
http://'.$ipadd.'/live.php?c=AAS_Vidyalaya&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png" group-title="Avi JioTV",Khandoba Majha, Jejuri
http://'.$ipadd.'/live.php?c=Khandoba_Majha_Jejuri&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png" group-title="Avi JioTV",Dharm Granth TV
http://'.$ipadd.'/live.php?c=DharmaGranth_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png" group-title="Avi JioTV",P News
http://'.$ipadd.'/live.php?c=P_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png" group-title="Avi JioTV",Malanadu TV
http://'.$ipadd.'/live.php?c=Malnadu_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABSTAR_News.png" group-title="Avi JioTV",AB Star News
http://'.$ipadd.'/live.php?c=ABSTAR_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png" group-title="Avi JioTV",Sanatan TV
http://'.$ipadd.'/live.php?c=Sanatan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png" group-title="Avi JioTV",Express TV
http://'.$ipadd.'/live.php?c=Express_TV&q=800&e=.m3u8';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png" group-title="Avi JioTV",Express Shikshana
http://'.$ipadd.'/live.php?c=Express_TV_Shikshana&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png" group-title="Avi JioTV",Jigyasa TV
http://'.$ipadd.'/live.php?c=Jigyasa_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png" group-title="Avi JioTV",35mm
http://'.$ipadd.'/live.php?c=35mm&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png" group-title="Avi JioTV",Sristi TV
http://'.$ipadd.'/live.php?c=Sristi_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png" group-title="Avi JioTV",Aatmadarshan TV
http://'.$ipadd.'/live.php?c=Atmadarshan_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST3_HD.png" group-title="Avi JioTV",TEST3 HD
http://'.$ipadd.'/live.php?c=TEST3_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST4_HD.png" group-title="Avi JioTV",TEST4 HD
http://'.$ipadd.'/live.php?c=TEST4_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST5_HD.png" group-title="Avi JioTV",TEST5 HD
http://'.$ipadd.'/live.php?c=TEST5_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST6_HD.png" group-title="Avi JioTV",TEST6 HD
http://'.$ipadd.'/live.php?c=TEST6_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST7_HD.png" group-title="Avi JioTV",TEST7 HD
http://'.$ipadd.'/live.php?c=TEST7_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST8_HD.png" group-title="Avi JioTV",TEST8 HD
http://'.$ipadd.'/live.php?c=TEST8_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png" group-title="Avi JioTV",Hare Krsna Pravachan
http://'.$ipadd.'/live.php?c=Hare_Krsna_Pravachan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Shows.png" group-title="Avi JioTV",JioCinema Shows
http://'.$ipadd.'/live.php?c=JioCinema_Shows&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Action.png" group-title="Avi JioTV",JioCinema Action
http://'.$ipadd.'/live.php?c=JioCinema_Action&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Comedy.png" group-title="Avi JioTV",JioCinema Comedy
http://'.$ipadd.'/live.php?c=JioCinema_Comedy&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png" group-title="Avi JioTV",Highbrow
http://'.$ipadd.'/live.php?c=Highbrow&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png" group-title="Avi JioTV",Lord Shri Vitthal Rukmini
http://'.$ipadd.'/live.php?c=LordShri_Vitthal&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png" group-title="Avi JioTV",Rajyoga TV
http://'.$ipadd.'/live.php?c=Rajyoga_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png" group-title="Avi JioTV",Rajyoga Malayalam
http://'.$ipadd.'/live.php?c=Rajyoga_Malayalam&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png" group-title="Avi JioTV",Mandir Shri Govinddevji-Jaipur
http://'.$ipadd.'/live.php?c=GovindDevji_Jaipur&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png" group-title="Avi JioTV",Dagdusheth Ganpati - Pune
http://'.$ipadd.'/live.php?c=Dagdusheth_Pune&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png" group-title="Avi JioTV",Nimbark TV
http://'.$ipadd.'/live.php?c=Nimbark&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png" group-title="Avi JioTV",Click Life
http://'.$ipadd.'/live.php?c=Click_Life&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png" group-title="Avi JioTV",Ambabai Temple-Kolhapur
http://'.$ipadd.'/live.php?c=Ambabai_Temple&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST9_HD.png" group-title="Avi JioTV",TEST9 HD
http://'.$ipadd.'/live.php?c=TEST9_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST10_HD.png" group-title="Avi JioTV",TEST10 HD
http://'.$ipadd.'/live.php?c=TEST10_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png" group-title="Avi JioTV",God TV
http://'.$ipadd.'/live.php?c=God_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png" group-title="Avi JioTV",Headlines Tripura
http://'.$ipadd.'/live.php?c=Tripura_News&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png" group-title="Avi JioTV",Global Sanjh
http://'.$ipadd.'/live.php?c=Sanjh_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png" group-title="Avi JioTV",ABZY Dhakad
http://'.$ipadd.'/live.php?c=ABZY_Dhakad&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png" group-title="Avi JioTV",ABZY Cool
http://'.$ipadd.'/live.php?c=ABZY_Cool&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png" group-title="Avi JioTV",ABZY Movies
http://'.$ipadd.'/live.php?c=ABZY_Movies&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png" group-title="Avi JioTV",Sh Krishna Matta Adamaru Paryaya UDUPI
http://'.$ipadd.'/live.php?c=Udupi_Krishna_Temple&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png" group-title="Avi JioTV",Sugran
http://'.$ipadd.'/live.php?c=Sugran&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png" group-title="Avi JioTV",Mahavir Mandir Patna
http://'.$ipadd.'/live.php?c=Hanuman_Mahavir_Temple&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG" group-title="Avi JioTV",Vignesh TV
http://'.$ipadd.'/live.php?c=Vignesh_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png" group-title="Avi JioTV",Shri Omkareshwar Mandir
http://'.$ipadd.'/live.php?c=Omkareshwar_Temple&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png" group-title="Avi JioTV",Stars Tell
http://'.$ipadd.'/live.php?c=StarTell&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png" group-title="Avi JioTV",Wellness
http://'.$ipadd.'/live.php?c=Wellness_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Temples_New.png" group-title="Avi JioTV",ISKCON Darshan
http://'.$ipadd.'/live.php?c=Iskon_Temples_New&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png" group-title="Avi JioTV",Takht Sri Patna Sahib - Patna
http://'.$ipadd.'/live.php?c=Sri_Patna_Sahib&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png" group-title="Avi JioTV",Shani Shingnapur
http://'.$ipadd.'/live.php?c=Shani_Shingnapur&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png" group-title="Avi JioTV",Prati Shirdi Saibaba
http://'.$ipadd.'/live.php?c=Prati_Shirdi_Saibaba&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png" group-title="Avi JioTV",Ganga Darshan Varanasi
http://'.$ipadd.'/live.php?c=Ganga_Darshan_Varanasi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ozar.png" group-title="Avi JioTV",Ashtavinayak Ozar
http://'.$ipadd.'/live.php?c=Ashtavinayak_Ozar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png" group-title="Avi JioTV",SVBC2
http://'.$ipadd.'/live.php?c=SVBC2&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png" group-title="Avi JioTV",Ichhapuran Balaji Rajasthan
http://'.$ipadd.'/live.php?c=Ichhapuran_Balaji_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png" group-title="Avi JioTV",Iskon Girgaon
http://'.$ipadd.'/live.php?c=Iskon_Girgaon&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png" group-title="Avi JioTV",Ashtavinayak Ranjangaon
http://'.$ipadd.'/live.php?c=Ashtavinayak_Ranjangaon&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png" group-title="Avi JioTV",Karani Mata Rajasthan
http://'.$ipadd.'/live.php?c=Karani_Mata_Rajasthan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png" group-title="Avi JioTV",Mahalaxmi Mumbai
http://'.$ipadd.'/live.php?c=Mahalaxmi_Mumbai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png" group-title="Avi JioTV",Babulnaath Mumbai
http://'.$ipadd.'/live.php?c=Babulnaath_Mumbai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png" group-title="Avi JioTV",Mumbadevi Mumbai
http://'.$ipadd.'/live.php?c=Mumbadevi_Mumbai&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png" group-title="Avi JioTV",BBC News Hindi
http://'.$ipadd.'/live.php?c=BBC_Hindi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png" group-title="Avi JioTV",TIME8
http://'.$ipadd.'/live.php?c=TIME8&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png" group-title="Avi JioTV",Krishna Vani
http://'.$ipadd.'/live.php?c=Krishna_Vani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png" group-title="Avi JioTV",Wah Punjabi
http://'.$ipadd.'/live.php?c=Wah_Punjabi&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png" group-title="Avi JioTV",YTV India
http://'.$ipadd.'/live.php?c=YTV_INDIA&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png" group-title="Avi JioTV",9 Bharat Samachar
http://'.$ipadd.'/live.php?c=9_Bharat_Samachar&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png" group-title="Avi JioTV",News Only
http://'.$ipadd.'/live.php?c=News_Only&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png" group-title="Avi JioTV",Gurkibani
http://'.$ipadd.'/live.php?c=Gurkebaani&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png" group-title="Avi JioTV",TEST11 HD
http://'.$ipadd.'/live.php?c=TEST11_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST12_HD.png" group-title="Avi JioTV",TEST12 HD
http://'.$ipadd.'/live.php?c=TEST12_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png" group-title="Avi JioTV",Shri Jain Nakoda Parshwanath Tirth
http://'.$ipadd.'/live.php?c=Nakoda_Temple&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png" group-title="Avi JioTV",Argus News
http://'.$ipadd.'/live.php?c=Argus_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Braj_Darshan.png" group-title="Avi JioTV",Braj Darshan
http://'.$ipadd.'/live.php?c=Braj_Darshan&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png" group-title="Avi JioTV",BHOOMI 24x7
http://'.$ipadd.'/live.php?c=Bhoomi_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" group-title="Avi JioTV",Kannur One
http://'.$ipadd.'/live.php?c=Kannur_one&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST13_HD.png" group-title="Avi JioTV",TEST13 HD
http://'.$ipadd.'/live.php?c=TEST13_HD&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png" group-title="Avi JioTV",World  Punjabi
http://'.$ipadd.'/live.php?c=World_Punjab&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png" group-title="Avi JioTV",Samachar Today
http://'.$ipadd.'/live.php?c=Samachar_Today&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png" group-title="Avi JioTV",Sangat TV
http://'.$ipadd.'/live.php?c=Sangat_TV&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarvamangala.png" group-title="Avi JioTV",Sarvamangala
http://'.$ipadd.'/live.php?c=Sarvamangala&q=800&e=.m3u8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png" group-title="Avi JioTV",AB News
http://'.$ipadd.'/live.php?c=AB_News&q=800&e=.m3u8
';

fwrite($playlist, $modlist);
fclose($playlist);

$ip = fopen("ip.php", "w") or die("Unable to open file!");
$ipw='<?php
$ip="'.$ipadd.'";
?>
';
fwrite($ip, $ipw);
fclose($ip);
header('Location: index.php?msg=Playlist Generation Successfull');
?>