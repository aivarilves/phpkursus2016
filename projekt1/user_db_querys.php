<?php  exit('Attacker, go away!'); ?> 

CREATE TABLE IF NOT EXISTS `elutee` (
  `elutee_id` int(11) NOT NULL,
  `elutee_pos` text NOT NULL,
  `elutee_neg` text NOT NULL,
  `elutee_ylesanne` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Elutee numbrite info';

--
-- Dumping data for table `elutee`
--

INSERT INTO `elutee` (`elutee_id`, `elutee_pos`, `elutee_neg`, `elutee_ylesanne`) VALUES
(1, 'individuaalsus - julgus, algatusvõimelisus, leidlikkus, tugev isiksus, auahnus, kohusetundlikkus, otsustusvõimelisus.', 'egoism - flegmaatiline, edev, kangekaelne, arg, võimuahne, silmakirjalik, valitsev, enesekeskne, pillaja, agressiivne, türann.', 'loobumus'),
(2, 'suhtlus - diplomaatiline, truu, harmooniline, sõbralik, tundlik, kunstihuviline, kaastundlik, seltskondlik, koostöövõimeline.', 'tuulelipp - ülitundlikkus, argus, iseloomutus, ükskõiksus, hoolimatus, otsustusvõimetus, pessimistlik, masenduv, valelik, silmakirjalik.', 'eneseväärikus'),
(5, 'vabadus - leidlik, vabadust armastav, mitmekülgne, positiivne muutuste suhtes, seltskondlik, sümpaatne, seksikas.', 'piiratus - vastutustundetu, lärmakas, hoolimatu, ekshibitsionistlik, sensatsioonihimuline, salakaval, naudinguhimuline, lodev, liialdav, hasartmängija, valelik.', 'kainus'),
(6, 'vastutus - teenistusvalmis, harmooniline, kohanemisvõimeline, teenekas, tasakaalukas, truu kodu ja pere kaitsja.', 'hooletus - pedantne, liiga muretsev, ründav, pealetükkiv, tavapärane, keelepeksja, egoist, viriseja, torisev, armukade, kade, umbusklik, küüniline, võimuahne, valitsev.', 'distsipliin'),
(3, 'eneseväljendus - inspireeriv, optimistlik, veetlev, andekas, armastav, seltskondlik, kunstihuviline, keeleandeline, tähelepanelik, sõbralik, truu.', 'arglikkus - laisk, torisev, pillaja, edev, küüniline, kriitiline, sentimentaalne, armukade, kade, ahne, sallimatu, ebausaldav, kahtlev.', 'omakasupüüdmatu teenimine'),
(4, 'organiseeritus - aus, praktiline, organiseerimisvõimeline, kannatlik, kindel, kõva töötegija, tasakaalukas.', 'laiskus - kitsi, kitsarinnaline, väiklane, sallimatu, dogmaatiline, toores, lipitsev, pahatahtlik, pika vihaga, matslik, taktitu, vägivaldne.', 'rahuldumine'),
(7, 'tarkus - vähese jutuga, tasakaalukas, analüüsiv, huvitub okultismist, hingestatud, leplik, otsiv, põhjalik, õiglane.', 'mõistmatus - skeptiline, sarkastiline, tundetu, närviline, melanhoolne, kriitiline, suureline, jahe, egotsentriline, sissepoole vaatav, ebaaus, võlts, alkoholismi ja maagiasse kalduv.', 'praktilisus'),
(8, 'saavutus - organiseerija, arvustusvõimeline, kompetentne, visa, tugev, võimekas, ennastsalgav, sitke.', 'tagasihoidlikkus - pika vihaga intrigeeriv, ahne, tasakaalutu, omakasupüüdlik, kaval, julm, kättemaksuhimuline, türanniseeriv, võitlushimuline, agressiivne.', 'headus, andestamine'),
(9, 'kaastunne - inimsõbralik, kunstihuviline, teenistusvalmis, kiinduv, andekas.', 'egoistlikkus - kergemeelne, jäme, sentimentaalne, ebakindel, nõutu, ebamoraalne, toores, vastutustundetu, sallimatu.', 'kannatlikkus'),
(11, 'kõrgem inspiratsioon', 'mandumine - hävituslikkus, närvilisus, küünilisus', ''),
(22, 'kõikehõlmavus - enesega rahulolu, eneseküllus', 'täielik ükskõiksus, eneseküllus', ''),
(33, 'universaalne armastus kõige elava vastu', 'äärmuslik egotsentrism', ''),
(44, 'Ere individuaalsus, ideaalne maailma- või rahukohtunik. Kõrgeim õiglus.', 'Sellise elutee numbriga inimesi on sündinud kahe viimase aastatuhande jooksul väga vähe. Esimesel aastatuhandel oli esimene selline kombinatsioon võimalik alles 09.08.999 ning sellest edasi veel vaid mõnel päeval nimetatud aasta lõpuni. Teisel aastatuhandel oli see kombinatsioon võimalik alates 29.09.1995 ning igal sellele järgneval aastalgi vaid üksikutel päevadel. Inimene, kelle elutee numbriks on 55 võiks sündida alles 29.09.8999.', ''),
(0, '', '', 'kannatlikkus');

-- --------------------------------------------------------

--
-- Table structure for table `pythagoras`
--

CREATE TABLE IF NOT EXISTS `pythagoras` (
  `pyth_id` int(11) NOT NULL,
  `pyth_selgitus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Pythagorase ruudu seletused';

--
-- Dumping data for table `pythagoras`
--

INSERT INTO `pythagoras` (`pyth_id`, `pyth_selgitus`) VALUES
(1, 'Rafineeritud egoist. Ta ei pööra ümbritsevatele tähelepanu, vaid püüab igast olukorrast vaid endale omakasu saada. Teised inimesed huvitavad teda vähe või et millest nad ära elavad. Oluline on vaid tema enda elu. '),
(11, 'Egoistlikule inimesele väga sarnane inimene, kes vahel siiski võib teiste peale ka mõelda.\r\nOtsib teiste heakskiitu, isegi kui selleks pole mingit alust. Talle meeldib ennast kiita. Tundub endale kõige targem ja andekam. On üllatunud, kui teised seda ei märka.'),
(111, 'Positiivselt püsiva ja rahumeelse iseloomuga inimene. „Kuldne keskmine”. Suhtleja. Talle eriti ei meeldi alluda, aga ise juhtima ka ei pürgi. Kui sellise inimesega rääkida hingest hinge, siis leiab alati kompromissi.'),
(1111, 'Väga tahtekindel  ja tugev iseloom. Ta ei salli valetamist ja pugemist, aga vahel võib lähedaste nimel seda teha, hambad ristis. Mehed võivad valida sõjaväelase elukutse. Naised hoiavad oma peret harilikult võimukalt oma käpa all.'),
(11111, 'Väiklane türann, diktaator. Oma idee nimel võib ta tuulde lasta miljonite inimeste elusid. Läheb oma eesmärkide saavutamiseks kasvõi üle laipade. Kui suurelt ei saa, siis on kasvõi oma perekonnas türann või tekib tal psühhiaatriline häire. On oma tahtmistes pealekäiv ja hästi kohanev. Ka kättemaksmise osas. Peaaegu alati omab mingit maaniat. Tunneb suurt kiindumust oma laste vastu.'),
(111111, 'Haruldane kombinatsioon. Eriliselt karm või isegi julm inimene, kes siiski lähedaste või inimkonna hüvanguks on kõigeks valmis, võimeline tegema võimatut. Inimene ühe fanaatilise ideega. Suhtlejana äärmiselt ebameeldiv ja raske tegelane. Õnneks tuleb selliseid inimesi harva ette.'),
(20, 'Bioenergia puudub. Kanal on avatud aktiivseks energia neelamiseks. Sellistele inimestele meeldivad vanad asjad (kollektsionäärid). Nad ei suhtu ümbritsejatesse halvasti, on hästi kasvatatud ja üllad, kuid selle juures püüavad elada teiste arvel, neist nö toituda, neelates nende bioenergiat. Erandeid on harva.'),
(2, 'Energia seisukohalt tavalised inimesed. Bioenergiat eluks jätkub, kuid seda on vähevõitu. Need inimesed on ülitundlikud atmosfääri kõikumistele. Nad väldivad stressiolukordi, tugevaid emotsioone. Seetõttu on vaja tegeleda spordiga, veel parem, joogaga. '),
(22, 'Suhteliselt suure bioenergia tagavaraga. Bioenergiat on küllaldaselt. See inimene on võimeline teisi ravima. Head arstid, medõed, sanitarid. Nende kutsumus – meditsiin. Nende perekonnas on harva närvilisust ja stressi.'),
(222, 'Hea ekstrasenss. Isegi sel juhul, kui inimene ei ole oma võimetest teadlik ega kahtlustagi. Aga ravib samas oma bioväljaga, isegi oma kohaloluga. Need inimesed on vaid tõuke ootel, mis avaks nende võimekuse.'),
(2222, 'Neid inimesi armastab vastassugupool eriti. Aga kui neil on ka numbrites kolm kuute ehk 666, siis tuleb olla ettevaatlik. Kui te kunagi olete kohanud naist või meest, kellesse eranditult on armunud vastassoost inimesed, siis on see tema. Eriti neil tuleb olla ettevaatlik energiavampiiride suhtes, sest nad kiputakse tühjaks imema.'),
(22222, 'Neid inimesi armastab vastassugupool eriti. Aga kui neil on ka numbrites kolm kuute ehk 666, siis tuleb olla ettevaatlik. Kui te kunagi olete kohanud naist või meest, kellesse eranditult on armunud vastassoost inimesed, siis on see tema. Eriti neil tuleb olla ettevaatlik energiavampiiride suhtes, sest nad kiputakse tühjaks imema.'),
(222222, 'Neid inimesi armastab vastassugupool eriti. Aga kui neil on ka numbrites kolm kuute ehk 666, siis tuleb olla ettevaatlik. Kui te kunagi olete kohanud naist või meest, kellesse eranditult on armunud vastassoost inimesed, siis on see tema. Eriti neil tuleb olla ettevaatlik energiavampiiride suhtes, sest nad kiputakse tühjaks imema.'),
(30, 'Väga korralik ja punktuaalne inimene, kes tõuseb teiste hulgast esile kultuurse kõne ja kasvatuse poolest. Head peremehed ja –naised. Natuke tüütud oma kinnisideega puhtuse poole püüdlemisest. Armastavad vaadata peeglisse. Teevad tööd ära kannatlikult ja veatult.'),
(3, 'Sellistel inimestel sõltub kõik tujust. Nad ei armasta korratust, aga koristamine sõltub neil jällegi tujust (tahan – teen, ei taha – ei tee). Ei armasta koonerdada ega kokku hoida. Laia natuuriga. Vahel vasturääkivad. Kodus on tavaliselt lohakad, aga vahel võtavad äkki kätte ja teevad ootamatult ja täiuslikult kõik korda.'),
(33, 'Head võimed täppisteaduste osas (matemaatika, füüsika, keemia). Kalduvad sinna poole. Neil on teatud analüütiline mõtlemine.'),
(3333, 'Nendest inimestest saavad head teadlased. Kui see ei realiseeru, siis võib ilmneda pedantsus, korralikkus, ihnsus, pidev õigluse nõudmine.'),
(33333, 'Nendest inimestest saavad head teadlased. Kui see ei realiseeru, siis võib ilmneda pedantsus, korralikkus, ihnsus, pidev õigluse nõudmine.'),
(333333, 'Nendest inimestest saavad head teadlased. Kui see ei realiseeru, siis võib ilmneda pedantsus, korralikkus, ihnsus, pidev õigluse nõudmine.'),
(40, 'Sellel inimesel on tervisega probleeme. See on väga nõrk. Juba lapsest saati erinevad haigused. Mida rohkem on tal number 2-sid, seda kauem saab haige olema, sest annab oma energiat välja, maailmale.'),
(4, 'Tervis on normaalne ehk keskmine. Haigused algavad üleminekueas ja vanemalt. Et mitte vanemas eas murduda, on vaja tervist karastada. Peamised sobivad spordialad – ujumine, jooksmine.'),
(44, 'Väga terve inimene, kellel on haiguste suhtes kõrge vastupanuvõime. Elava temperamendiga.\r\nNeed inimesed ei avalikusta ega paljasta oma seksuaalset potentsi, kuid nad võivad olla seksuaalse külgetõmbavuse sümbolid.'),
(444, 'Sama, aga eredamalt väljendunud. Väga tugeva tervisega. Selliseid kohtab äärmiselt harva. Seksuaalne temperament ülimalt külgetõmbav.'),
(50, 'Inimene sündis suletud intuitsioonikanaliga. St peenmaailma ja kosmosega ühendav kanal sünnist saati suletud. Inimene on aktiivne ja püüab midagi ette võtta. Ta  on hõivatud eksperimentidega, tõestustega, pingelise mõtlemisega, üritab tulevasi sündmusi prognoosida. Mõtleb alati oma tegevused läbi, aga paratamatult teeb elus palju vigu. Sellistel inimestel tuleb elus oma tee luua suure vaevaga.'),
(5, 'Intuitsiooni kanal avatud. Need inimesed teevad vigu vähem. Elulised olukorrad asuvad kontrolli all. Et neist maksimaalselt kasu saada.'),
(55, 'Intuitsioon tugevalt arenenud. Näevad palju prohvetlikke unenägusid, aimdusi sündmustest. Üheainsa detaili põhjal võivad palju öelda. Oskus ära arvata minevikku ja tulevikku.\r\n (Võivad olla uurijad või juristid)'),
(555, 'Peaaegu selgeltnägijad. Kõik, mis ümberringi toimub, on neile arusaadav. Ilma igasuguste teadmiste ja vihjeteta oskavad täpselt öelda, mida teha endal ja teistel. Üksikutel juhtudel ennustavad tulevasi sündmusi, kuid ei oska öelda, kuidas vältida ebameeldivusi.'),
(5555, 'Selgeltnägijad. Neile inimestele allub aeg ja ruum. Nad võivad tungida teistesse aeg-ruumi mõõtmetesse, dimensioonidesse. Neile on selge ja ükskõik, mis ümberringi toimub. Nad on sageli teises ajas ja ruumis, olles justkui lülitunud teise olemise süsteemi.'),
(60, 'Inimene on tulnud siia maailma elukutset saama. Ta ei armasta füüsilist tööd, kuid on sunnitud sellega tegelema, et areneda ja edasi liikuda. Tema arengu peamiseks liikumapanevaks jõuks on kujutlus, fantaasia, kunstiline maitse. Hoolimata kõrvale kallutavatest vajadustest on ta võimeline suurteks ja tõsisteks tegudeks.'),
(6, 'Maine inimene, kuid võimeline hingelisteks väärtusteks ja humaanseteks tegudeks.  Mõtleb õppimisest, aga füüsilisest tööst ta ei pääse. Võib komistada loominguliste või täppisteaduste otsa, aga oma olemise jätkumiseks peab tegema füüsilist tööd. Võivad ilmneda kalduvused kunsti poole.'),
(66, 'Nö maandatud inimene. Armastab tööd ja vaeva näha. Aga füüsiline töö on talle vaid hobiks. Ta küll püüdleb füüsilise töö poole, kuid see segab tema arengut. Vaimne tegevus ja kunstiga tegelemine on ainsad, mis võivad seda inimest nö tõsta.'),
(666, 'Ärev, nö saatana märk. Väga ligitõmbav ja temperamentne inimene. Nõuab partnerilt suuri rahalisi kulutusi. Püüdleb oma kütkestavuse arvel olla kogu aeg ühiskonna või siis seltskonna keskmes. Ebakindel inimene, kes sageli otsib ja vahetab juhuslikke või lühiajalisi partnereid.'),
(6666, 'See inimene on oma eelmistes maistes eludes palju rasket tööd teinud, olles kurjust kehastanud, üritades seda siis raske töö ning vaimsete tegevustega ja enda täiustamise abil ära ajada.\r\n'),
(70, 'puuduvad – Inimene saab andekaks oma järgmistes kehastustes. Aga praeguses elus ootab teda selles suhtes raske saatus. On sündinud selleks, et ta mõistaks, mis asi on anne. Preaguses elus aitavad tal teod ja elukogemused saavutada andekust, aga kannatused annavad mõistmist. Peamine on püüda ära moment, millal anne saab kõrgemalt saadetud.'),
(7, 'Nõrgalt väljendunud andekus. Sellised inimesed elavad kergelt, aga edu tuleb neile vaid loomingulise töö ja vaeva tulemusel. Mida rohkem tööd ja vaeva, seda rohkem tulemusi.'),
(77, 'Väga andeka inimese märk. Nad on musikaalsed, omavad peent maitset kunstide osas, võivad hästi maalida ja joonistada. Temas on egoistlik alge. Seega võib ta kõiges andekas olla – nii heas kui halvas. Tema jaoks ei ole suletud uksi. Aga isegi, kui ta satub kohtu alla, siis kohtuprotsess aitab tal võita. Tal on õnne ka hasartmängudes. Kipub oma heategijaid unustama.'),
(777, 'Eriline märk. Nad ei tule Maa peale kauaks. Need inimesed põrkuvad tõsiste raskustega, kui nad jäävad sellele teele pidama. Kui tulid kauemaks, paljude number 4-de ja 2-dega, siis neid ootavad tõsised haigused.  Võivad vanaduses jääda halvatuks. Nad on lahked, rahulikud, kuid väga valulikult võtavad igasugust egaõiglust. Nende tundlikkus hukutab neid ennast, kõrgenenud ning innuka õiglustunde tõttu. Armastavad unistada. Mitte alati ei taju reaalsust.'),
(7777, 'Ärev märk. Ingli märk. Need inimesed peavad olema väga ettevaatlikud. Nad pidevalt hoolitsevad ümbritsevate eest, muretsevad nende pärast, kuid sageli nad ei ela vanaduseni.\r\n'),
(80, 'Kohustetundega kipub neil raskusi olema või siis pole üldse. Nad ei arva, et nad peaks kindlasti midagi tegema. Inimene võib kergesti võlgu võtta ega mitte kiirustada tagasimaksmisega. Aga sageli nad ei tahagi võlgu või midagi laenuks võtta. Tahavad olla sõltumatud. Kohustustest ka. Mida vähem kohustusi, seda parem.'),
(8, 'Inimene arenenud vastutustundega. Oma tegudes täpsed. Heasoovlikud.'),
(88, 'Väga arenenud vastutustundega. See inimene on alati valmis lähedasi või teisi inimesi aitama. Suurepärane pereinimene. Kuid samas sõltuv ebaausatest inimestest.'),
(888, 'Inimene on kutsutud rahvast teenima. Tunneb rahva ees kohustust. Rahva eesotsas oleva väljavalitud inimese sümbol. Inimene, kes saavutab väljapaistvaid tulemusi. Kuid ka avalikkuse ees varju jäädes töötavad ennastsalgavalt rahva hüvanguks, suurepäraste tulemustega.'),
(8888, 'Inimesel on parapsühholoogilised võimed, samuti piiritud võimed täppisteaduste osas. Imeline märk inimesest, kes läheb üleloomulikku teed pidi.'),
(9, 'Salapärane märk. Selleks, et seda saavutada, peab inimene terve elu vaeva nägema. Sellisel inimesel on vaja oma mõistust arendada. Nad ei tohiks ka saavutatuga rahule ehk paigale jääda, et intelligentsi tase ei langeks algtasemele tagasi.'),
(99, 'Tarkus sünniga kaasa antud. Tark, aga laisk inimene. Ei armasta õppida, sest on harjunud oma teadmisi lihtsalt saama, ilma vaevata. Peamiseks tõkkeks sellel teel on irooniline meel. Iroonilise varjundiga, kuid samas peen huumorimeel. Sõltumatus.'),
(999, 'Väga, edukas ja õnnelik inimene. Teada saamine ei valmista mingeid raskusi. Suurepärased vestluskaaslased.'),
(9999, 'Haruldase mõistusega inimene, kellele avaneb tõde. Kui tal on ka intuitsiooni kanal avatud, siis võib iga algatus lõppeda krahhiga. Ja samas on ta piisavalt ebameeldiv, jõhker, südametu, julm.\r\nTeda on raske, aeg-ajalt võimatu teha ühiskonnas adekvaatseks.'),
(333, 'Võimekus teaduste osas. Tüütuseni korralikud. Kalduvus pedantsusele, ihnsusele, õigluse tagaajamisele.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
