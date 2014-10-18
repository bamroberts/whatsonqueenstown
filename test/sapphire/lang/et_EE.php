<?php

/**
 * Estonian (Estonia) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('et_EE', $lang) && is_array($lang['et_EE'])) {
	$lang['et_EE'] = array_merge($lang['en_US'], $lang['et_EE']);
} else {
	$lang['et_EE'] = $lang['en_US'];
}

$lang['et_EE']['AdvancedSearchForm']['ALLWORDS'] = 'Kõigide sõnade järgi';
$lang['et_EE']['AdvancedSearchForm']['ATLEAST'] = 'Vähemalt ühe kirjutatud sõna järgi';
$lang['et_EE']['AdvancedSearchForm']['EXACT'] = 'Täpse sõna järgi';
$lang['et_EE']['AdvancedSearchForm']['FROM'] = '-';
$lang['et_EE']['AdvancedSearchForm']['GO'] = 'Mine';
$lang['et_EE']['AdvancedSearchForm']['LASTUPDATED'] = 'Viimati uuendatud';
$lang['et_EE']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'VIIMATI UUENDATUD';
$lang['et_EE']['AdvancedSearchForm']['PAGETITLE'] = 'Lehe pealkirja järgi';
$lang['et_EE']['AdvancedSearchForm']['RELEVANCE'] = 'Tähtsuse järjekorras';
$lang['et_EE']['AdvancedSearchForm']['SEARCHBY'] = 'Otsi täpsemalt';
$lang['et_EE']['AdvancedSearchForm']['SORTBY'] = 'JÄRJESTA TULEMUSED';
$lang['et_EE']['AdvancedSearchForm']['TO'] = '-';
$lang['et_EE']['AdvancedSearchForm']['WITHOUT'] = 'Pole tähtis kuidas';
$lang['et_EE']['BankAccountField']['VALIDATIONJS'] = 'Palun sisesta õige panga konto number';
$lang['et_EE']['BasicAuth']['ENTERINFO'] = 'Palun sisesta kasutajanimi ja parool.';
$lang['et_EE']['BasicAuth']['ERRORNOTADMIN'] = 'Antud kasutaja ei ole administraator.';
$lang['et_EE']['BasicAuth']['ERRORNOTREC'] = 'See kasutajanimi / parool ei ole tunnustatud';
$lang['et_EE']['BBCodeParser']['ALIGNEMENT'] = 'Joondus';
$lang['et_EE']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'Joondus paremale';
$lang['et_EE']['BBCodeParser']['BOLD'] = 'Paks tekst';
$lang['et_EE']['BBCodeParser']['BOLDEXAMPLE'] = 'Paks';
$lang['et_EE']['BBCodeParser']['CODE'] = 'Koodi plokk';
$lang['et_EE']['BBCodeParser']['CODEDESCRIPTION'] = 'Kodederimata koodi plokk';
$lang['et_EE']['BBCodeParser']['CODEEXAMPLE'] = 'Koodi plokk';
$lang['et_EE']['BBCodeParser']['COLORED'] = 'Värvitud tekst';
$lang['et_EE']['BBCodeParser']['COLOREDEXAMPLE'] = 'Sinine tekst';
$lang['et_EE']['BBCodeParser']['EMAILLINK'] = 'Emaili aadress';
$lang['et_EE']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Loo link emaili aadrssile';
$lang['et_EE']['BBCodeParser']['IMAGE'] = 'Pilt';
$lang['et_EE']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Näita pilti oma postituses';
$lang['et_EE']['BBCodeParser']['ITALIC'] = 'Kaldus text';
$lang['et_EE']['BBCodeParser']['ITALICEXAMPLE'] = 'Kaldus';
$lang['et_EE']['BBCodeParser']['LINK'] = 'Kodulehe link';
$lang['et_EE']['BBCodeParser']['LINKDESCRIPTION'] = 'Lingi teisele kodulehele või aadressile';
$lang['et_EE']['BBCodeParser']['STRUCK'] = 'Läbikriipsutatud tekst';
$lang['et_EE']['BBCodeParser']['STRUCKEXAMPLE'] = 'Läbikriipsutatud';
$lang['et_EE']['BBCodeParser']['UNDERLINE'] = 'Allajoonitud tekst';
$lang['et_EE']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Allajoonitud';
$lang['et_EE']['BBCodeParser']['UNORDERED'] = 'Järjestamata nimekiri';
$lang['et_EE']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Järjestamata nimekiri';
$lang['et_EE']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'Järjestamata asi 1';
$lang['et_EE']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Vahetasid oma parooli lehel';
$lang['et_EE']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Nüüd võid kasutada sisse logimiseks järgnevaid andmeid:';
$lang['et_EE']['ChangePasswordEmail.ss']['EMAIL'] = 'E-post';
$lang['et_EE']['ChangePasswordEmail.ss']['HELLO'] = 'Tere';
$lang['et_EE']['ChangePasswordEmail.ss']['PASSWORD'] = 'Parool';
$lang['et_EE']['CMSMain']['DELETE'] = 'Kustuta mustandi leht';
$lang['et_EE']['CMSMain']['DELETEFP'] = 'Kustuta avaldatud leht';
$lang['et_EE']['CMSMain']['RESTORE'] = 'Taasta';
$lang['et_EE']['CMSMain']['SAVE'] = 'Salvesta';
$lang['et_EE']['ComplexTableField']['CLOSEPOPUP'] = 'Sulge hüpikaken';
$lang['et_EE']['ComplexTableField.ss']['ADDITEM'] = 'Lisa %s';
$lang['et_EE']['ComplexTableField.ss']['CSVEXPORT'] = 'Ekspordi CSV-sse';
$lang['et_EE']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Ei leidnud midagi';
$lang['et_EE']['ComplexTableField.ss']['SORTASC'] = 'Sorteeri kasvavalt';
$lang['et_EE']['ComplexTableField.ss']['SORTDESC'] = 'Sorteeri kahanevalt';
$lang['et_EE']['ComplexTableField']['SUCCESSADD'] = 'Lisatud %s %s %s';
$lang['et_EE']['ComplexTableField']['SUCCESSEDIT'] = 'Salvestatud %s %s %s';
$lang['et_EE']['ComplexTableField_popup.ss']['NEXT'] = 'Eelmine';
$lang['et_EE']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Järgmine';
$lang['et_EE']['CompositeDateField']['DAY'] = 'Päev';
$lang['et_EE']['CompositeDateField']['DAYJS'] = 'Päeva';
$lang['et_EE']['CompositeDateField']['MONTH'] = 'Kuu';
$lang['et_EE']['CompositeDateField']['MONTHJS'] = 'Kuu';
$lang['et_EE']['CompositeDateField']['VALIDATIONJS1'] = 'Kontrolli, et oled pannud paika';
$lang['et_EE']['CompositeDateField']['VALIDATIONJS2'] = 'Õigesti';
$lang['et_EE']['CompositeDateField']['YEARJS'] = 'Aasta';
$lang['et_EE']['ConfirmedFormAction']['CONFIRMATION'] = 'Oled kindel?';
$lang['et_EE']['ConfirmedPasswordField']['ATLEAST'] = 'Paroolid peavad olema vähemelt %s ühikut pikkad';
$lang['et_EE']['ConfirmedPasswordField']['BETWEEN'] = 'Paroolid peavad olema %s kuni %s ühiku pikkused';
$lang['et_EE']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Paroolid peavad katuma';
$lang['et_EE']['ConfirmedPasswordField']['LEASTONE'] = 'Paroolides peab olema vähemalt üks täht ja üks number';
$lang['et_EE']['ConfirmedPasswordField']['MAXIMUM'] = 'Paroolid võivad olla kuni %s ühikut pikkad';
$lang['et_EE']['ConfirmedPasswordField']['NOEMPTY'] = 'Paroolid ei saa olla tühjad';
$lang['et_EE']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Muuda parool';
$lang['et_EE']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Pead olema sisse logitud oma sisuhalduse parooliga, et vaadata mustandeid ja arhiveeritud sisu. <a href="%s">Vajuta siia, et minna tagasi avaldatud lehe juurde.</a>';
$lang['et_EE']['Controller']['FILE'] = 'Fail';
$lang['et_EE']['Controller']['IMAGE'] = 'Pilt';
$lang['et_EE']['CreditCardField']['FIRST'] = 'esimene';
$lang['et_EE']['CreditCardField']['FOURTH'] = 'Neljas';
$lang['et_EE']['CreditCardField']['SECOND'] = 'teine';
$lang['et_EE']['CreditCardField']['THIRD'] = 'kolmas';
$lang['et_EE']['CreditCardField']['VALIDATIONJS1'] = 'Kontolli et sisestasid';
$lang['et_EE']['CreditCardField']['VALIDATIONJS2'] = 'Krediit kaardi numbri õigesti.';
$lang['et_EE']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['et_EE']['CurrencyField']['VALIDATIONJS'] = 'Sisesta õige valuuta';
$lang['et_EE']['DataObject']['PLURALNAME'] = 'Andme objektid';
$lang['et_EE']['DataObject']['SINGULARNAME'] = 'Andme objekt';
$lang['et_EE']['Date']['DAY'] = 'Päev';
$lang['et_EE']['Date']['DAYS'] = 'Päevad';
$lang['et_EE']['Date']['HOUR'] = 'Tund';
$lang['et_EE']['Date']['HOURS'] = 'Tunnid';
$lang['et_EE']['Date']['MIN'] = 'Minut';
$lang['et_EE']['Date']['MINS'] = 'Minutid';
$lang['et_EE']['Date']['MONTH'] = 'Kuu';
$lang['et_EE']['Date']['MONTHS'] = 'Kuud';
$lang['et_EE']['Date']['SEC'] = 'Sekund';
$lang['et_EE']['Date']['SECS'] = 'Sekundit';
$lang['et_EE']['Date']['TIMEDIFFAGO'] = '%s tagasi';
$lang['et_EE']['Date']['TIMEDIFFAWAY'] = '%s eemal';
$lang['et_EE']['Date']['YEAR'] = 'Aasta';
$lang['et_EE']['Date']['YEARS'] = 'Aastad';
$lang['et_EE']['DateField']['NOTSET'] = 'Pole seadistatud';
$lang['et_EE']['DateField']['TODAY'] = 'Täna';
$lang['et_EE']['DateField']['VALIDATIONJS'] = 'Sisesta õige kuupäeva formaat (PP/KK/AAAA).';
$lang['et_EE']['DateField']['VALIDDATEFORMAT'] = 'Palun sisesta kuupäev õiges vormingus (PP/KK/AAAA).';
$lang['et_EE']['DMYDateField']['VALIDDATEFORMAT'] = 'Sisesta õige kuupäeva formaat (PP-KK-AAAA).';
$lang['et_EE']['DropdownField']['CHOOSE'] = '(Vali)';
$lang['et_EE']['EmailField']['VALIDATION'] = 'Palun sisesta e-posti aadress.';
$lang['et_EE']['EmailField']['VALIDATIONJS'] = 'Palun sisesta e-posti aadress';
$lang['et_EE']['ErrorPage']['400'] = '400 - Halb päring';
$lang['et_EE']['ErrorPage']['401'] = '401 - Volitamata ligipääs';
$lang['et_EE']['ErrorPage']['403'] = '403 - Keelatud';
$lang['et_EE']['ErrorPage']['404'] = '404 - Ei leitud';
$lang['et_EE']['ErrorPage']['405'] = '405 -  Meetod pole lubatud';
$lang['et_EE']['ErrorPage']['406'] = '406 - Ligipääs puudub';
$lang['et_EE']['ErrorPage']['407'] = '407 - Proxy tuvastus vajalik';
$lang['et_EE']['ErrorPage']['408'] = '408 - Palve aegunud';
$lang['et_EE']['ErrorPage']['409'] = '409 - Konflikt';
$lang['et_EE']['ErrorPage']['410'] = '410 - Kustutatud';
$lang['et_EE']['ErrorPage']['411'] = '411 - Distants vajalik';
$lang['et_EE']['ErrorPage']['412'] = '412 - Eeltingimused täitmata';
$lang['et_EE']['ErrorPage']['413'] = '413 -  Palve käsklus liiga suur';
$lang['et_EE']['ErrorPage']['414'] = '414 - soovitud URL liiga pikk';
$lang['et_EE']['ErrorPage']['415'] = '415 - Ebasoovitav meedia tüüp';
$lang['et_EE']['ErrorPage']['416'] = '416 - Päring rahuldamata';
$lang['et_EE']['ErrorPage']['417'] = '417 - Eeldus puudub';
$lang['et_EE']['ErrorPage']['500'] = '500 - Serveri viga';
$lang['et_EE']['ErrorPage']['501'] = '501 - Rakendus puudub';
$lang['et_EE']['ErrorPage']['502'] = '502 - Halb sissepääsutee';
$lang['et_EE']['ErrorPage']['503'] = '503 - Teenus puudub';
$lang['et_EE']['ErrorPage']['504'] = '504 - Sissepääsutee aegmaas';
$lang['et_EE']['ErrorPage']['505'] = '505 - HTTP versioon ei ole kasutusel';
$lang['et_EE']['ErrorPage']['CODE'] = 'Veakood';
$lang['et_EE']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Vabandust aga tundub, et proovid ligipääseda lehele mida pole olemas.</p><p>Palun kontrolli uuesti aadressi kuhu proovid ligi pääseda.</p>';
$lang['et_EE']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Lehekülge ei leitud';
$lang['et_EE']['ErrorPage']['PLURALNAME'] = 'Vealehed';
$lang['et_EE']['ErrorPage']['SINGULARNAME'] = 'Vealeht';
$lang['et_EE']['File']['Content'] = 'Sisu';
$lang['et_EE']['File']['Filename'] = 'Failinimi';
$lang['et_EE']['File']['INVALIDEXTENSION'] = 'Faili laiend pole lubatud (sobiv: %s)';
$lang['et_EE']['File']['Name'] = 'Nimi';
$lang['et_EE']['File']['NOFILESIZE'] = 'Faili suurus on null bitti.';
$lang['et_EE']['File']['PLURALNAME'] = 'Failid';
$lang['et_EE']['File']['SINGULARNAME'] = 'Fail';
$lang['et_EE']['File']['Sort'] = 'Järjestamine';
$lang['et_EE']['File']['Title'] = 'Pealkiri';
$lang['et_EE']['File']['TOOLARGE'] = 'fail liiga suur, maksimum lubatud %s.';
$lang['et_EE']['FileIFrameField']['NOTEADDFILES'] = 'Saad faile lisada peale esimest salvestamist';
$lang['et_EE']['Folder']['CREATED'] = 'Esmalt üleslaetud';
$lang['et_EE']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Kustuta kasutamata väikepildid';
$lang['et_EE']['Folder']['DELSELECTED'] = 'Kustuta valitud failid';
$lang['et_EE']['Folder']['DETAILSTAB'] = 'Kirjeldus';
$lang['et_EE']['Folder']['FILENAME'] = 'Failinimi';
$lang['et_EE']['Folder']['FILESTAB'] = 'Failid';
$lang['et_EE']['Folder']['LASTEDITED'] = 'Viimati muudetud';
$lang['et_EE']['Folder']['PLURALNAME'] = 'Failid';
$lang['et_EE']['Folder']['SINGULARNAME'] = 'Fail';
$lang['et_EE']['Folder']['TITLE'] = 'Pealkiri';
$lang['et_EE']['Folder']['TYPE'] = 'Tüüp';
$lang['et_EE']['Folder']['UNUSEDFILESTAB'] = 'Kasutamata failid';
$lang['et_EE']['Folder']['UNUSEDFILESTITLE'] = 'Kasutamata failid';
$lang['et_EE']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Kasutamata väikepildid';
$lang['et_EE']['Folder']['UPLOADTAB'] = 'Lae üles';
$lang['et_EE']['Folder']['URL'] = 'Aadress';
$lang['et_EE']['Folder']['VIEWASSET'] = 'Vaata vahendeid';
$lang['et_EE']['Folder']['VIEWEDITASSET'] = 'Vaata / Muuda Vahendit';
$lang['et_EE']['ForgotPasswordEmail.ss']['HELLO'] = 'Tere';
$lang['et_EE']['ForgotPasswordEmail.ss']['TEXT1'] = 'Siin on sinu';
$lang['et_EE']['ForgotPasswordEmail.ss']['TEXT2'] = 'Parooli tühistus link';
$lang['et_EE']['ForgotPasswordEmail.ss']['TEXT3'] = '-';
$lang['et_EE']['Form']['DATENOTSET'] = 'Kuupäev määramata';
$lang['et_EE']['Form']['FIELDISREQUIRED'] = '%s on vajalik';
$lang['et_EE']['Form']['LANGAOTHER'] = 'Teised keeled';
$lang['et_EE']['Form']['LANGAVAIL'] = 'Saadaolevad keeled';
$lang['et_EE']['Form']['NOTSET'] = 'Määramata';
$lang['et_EE']['Form']['VALIDATIONALLDATEVALUES'] = 'Kontrolli, et sisestasid kõikk kuupäeva väärtused';
$lang['et_EE']['Form']['VALIDATIONBANKACC'] = 'Sisesta kehtiv pangakonto number';
$lang['et_EE']['Form']['VALIDATIONCREDITNUMBER'] = 'Ole kindel, et sisestasid %s krediitkaardi numbri õigesti';
$lang['et_EE']['Form']['VALIDATIONFAILED'] = 'Valideerimine ebaõnnestus';
$lang['et_EE']['Form']['VALIDATIONNOTUNIQUE'] = 'Sisestatud väärtus ei ole unikaalne';
$lang['et_EE']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Paroolid ei katu';
$lang['et_EE']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Paroolid ei saa olla tühjad';
$lang['et_EE']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Paroolis peab olema vähemalt üks number ja täht';
$lang['et_EE']['Form']['VALIDATOR'] = 'Kinnitaja';
$lang['et_EE']['Form']['VALIDCURRENCY'] = 'Sisesta õige valuuta';
$lang['et_EE']['FormField']['NONE'] = 'puudub';
$lang['et_EE']['GhostPage']['NOLINKED'] = 'Sel kohahoidmisleheküljel ei ole lingitud lehekülge.';
$lang['et_EE']['GhostPage']['PLURALNAME'] = 'Kummituslehed';
$lang['et_EE']['GhostPage']['SINGULARNAME'] = 'Kummitusleht';
$lang['et_EE']['Group']['Code'] = 'Grupi kood';
$lang['et_EE']['Group']['Description'] = 'Kirjeldus';
$lang['et_EE']['Group']['has_many_Permissions'] = 'Õigused';
$lang['et_EE']['Group']['IPRestrictions'] = 'IP aadressi piirangud';
$lang['et_EE']['Group']['Locked'] = 'Lukus?';
$lang['et_EE']['Group']['many_many_Members'] = 'Liikmed';
$lang['et_EE']['Group']['Parent'] = 'Vanem grupp';
$lang['et_EE']['Group']['PLURALNAME'] = 'Grupid';
$lang['et_EE']['Group']['SINGULARNAME'] = 'Grupp';
$lang['et_EE']['Group']['Sort'] = 'Järjesta';
$lang['et_EE']['GSTNumberField']['VALIDATION'] = 'Palun sisesta õiges vormingus GST number';
$lang['et_EE']['GSTNumberField']['VALIDATIONJS'] = 'Palun sisesta õige KM määr';
$lang['et_EE']['HtmlEditorField']['ALTTEXT'] = 'Kirjeldus';
$lang['et_EE']['HtmlEditorField']['ANCHOR'] = 'Sisesta/muuda ankrut';
$lang['et_EE']['HtmlEditorField']['ANCHORVALUE'] = 'Link';
$lang['et_EE']['HtmlEditorField']['BULLETLIST'] = 'Täpploetelu';
$lang['et_EE']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Joonda keskele';
$lang['et_EE']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Rööpjoonda';
$lang['et_EE']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Joonda vasakule';
$lang['et_EE']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Joonda paremale';
$lang['et_EE']['HtmlEditorField']['BUTTONBOLD'] = 'Paks (Ctrl+B)';
$lang['et_EE']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Lisa flash';
$lang['et_EE']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Lisa pilt';
$lang['et_EE']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Sisesta link';
$lang['et_EE']['HtmlEditorField']['BUTTONITALIC'] = 'Kursiiv (Ctrl+I)';
$lang['et_EE']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Eemalda link';
$lang['et_EE']['HtmlEditorField']['BUTTONSTRIKE'] = 'läbijoonitud kiri';
$lang['et_EE']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Allajoonitud';
$lang['et_EE']['HtmlEditorField']['CAPTION'] = 'Lisa kui tiiter';
$lang['et_EE']['HtmlEditorField']['CHARMAP'] = 'Sisesta sümbol';
$lang['et_EE']['HtmlEditorField']['CLOSE'] = 'Sulge';
$lang['et_EE']['HtmlEditorField']['COPY'] = 'Kopeeri (Ctrl+C)';
$lang['et_EE']['HtmlEditorField']['CREATEFOLDER'] = 'loo kaust';
$lang['et_EE']['HtmlEditorField']['CSSCLASS'] = 'Joondus / Stiil';
$lang['et_EE']['HtmlEditorField']['CSSCLASSCENTER'] = 'Keskel, iseseisvalt.';
$lang['et_EE']['HtmlEditorField']['CSSCLASSLEFT'] = 'Vasakul, tekst voldib ennast ümber.';
$lang['et_EE']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Ise vasakule';
$lang['et_EE']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Paremal, tekst voldib ennast ümber.';
$lang['et_EE']['HtmlEditorField']['CUT'] = 'Lõika (Ctrl+X)';
$lang['et_EE']['HtmlEditorField']['DELETECOL'] = 'Kustuta veerg';
$lang['et_EE']['HtmlEditorField']['DELETEROW'] = 'Kustuta rida';
$lang['et_EE']['HtmlEditorField']['EDITCODE'] = 'Muuda HTML koodi';
$lang['et_EE']['HtmlEditorField']['EMAIL'] = 'E-posti aadress';
$lang['et_EE']['HtmlEditorField']['FILE'] = 'Fail';
$lang['et_EE']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['et_EE']['HtmlEditorField']['FOLDER'] = 'Kaust';
$lang['et_EE']['HtmlEditorField']['FOLDERCANCEL'] = 'Tühista';
$lang['et_EE']['HtmlEditorField']['FORMATADDR'] = 'Aadress';
$lang['et_EE']['HtmlEditorField']['FORMATH1'] = 'Pealkiri 1';
$lang['et_EE']['HtmlEditorField']['FORMATH2'] = 'Pealkiri 2';
$lang['et_EE']['HtmlEditorField']['FORMATH3'] = 'Pealkiri 3';
$lang['et_EE']['HtmlEditorField']['FORMATH4'] = 'Pealkiri 4';
$lang['et_EE']['HtmlEditorField']['FORMATH5'] = 'Pealkiri 5';
$lang['et_EE']['HtmlEditorField']['FORMATH6'] = 'Pealkiri 6';
$lang['et_EE']['HtmlEditorField']['FORMATP'] = 'Lõik';
$lang['et_EE']['HtmlEditorField']['FORMATPRE'] = 'Eelvormindatud';
$lang['et_EE']['HtmlEditorField']['HR'] = 'Sisesta horisontaaljoon';
$lang['et_EE']['HtmlEditorField']['IMAGE'] = 'Pilt';
$lang['et_EE']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Mõõtmed';
$lang['et_EE']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Laius';
$lang['et_EE']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Kõrgus';
$lang['et_EE']['HtmlEditorField']['INDENT'] = 'Suurenda taanet';
$lang['et_EE']['HtmlEditorField']['INSERTCOLAFTER'] = 'Sisesta veerg peale';
$lang['et_EE']['HtmlEditorField']['INSERTCOLBEF'] = 'Sisesta veerg enne';
$lang['et_EE']['HtmlEditorField']['INSERTROWAFTER'] = 'Sisesta rida peale';
$lang['et_EE']['HtmlEditorField']['INSERTROWBEF'] = 'Sisesta rida enne';
$lang['et_EE']['HtmlEditorField']['INSERTTABLE'] = 'Sisesta tabel';
$lang['et_EE']['HtmlEditorField']['LINK'] = 'Link';
$lang['et_EE']['HtmlEditorField']['LINKANCHOR'] = 'Link sellele lehele';
$lang['et_EE']['HtmlEditorField']['LINKDESCR'] = 'Lingi kirjeldus';
$lang['et_EE']['HtmlEditorField']['LINKEMAIL'] = 'E-posti aadressi';
$lang['et_EE']['HtmlEditorField']['LINKEXTERNAL'] = 'Teist veebilehte';
$lang['et_EE']['HtmlEditorField']['LINKFILE'] = 'Salvesta fail';
$lang['et_EE']['HtmlEditorField']['LINKINTERNAL'] = 'Saidil olevat lehekülge';
$lang['et_EE']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Ava link uues aknas?';
$lang['et_EE']['HtmlEditorField']['LINKTEXT'] = 'Lingi text';
$lang['et_EE']['HtmlEditorField']['LINKTO'] = 'Lingi';
$lang['et_EE']['HtmlEditorField']['OK'] = 'OK';
$lang['et_EE']['HtmlEditorField']['OL'] = 'Nummerdatud loetelu';
$lang['et_EE']['HtmlEditorField']['OUTDENT'] = 'Vähenda rippuvat taanet';
$lang['et_EE']['HtmlEditorField']['PAGE'] = 'Leht';
$lang['et_EE']['HtmlEditorField']['PASTE'] = 'Kleebi (Ctrl+V)';
$lang['et_EE']['HtmlEditorField']['PASTETEXT'] = 'Aseta puhas text';
$lang['et_EE']['HtmlEditorField']['PASTEWORD'] = 'Aseta MS wordist';
$lang['et_EE']['HtmlEditorField']['REDO'] = 'Tee uuesti (Ctrl+Y)';
$lang['et_EE']['HtmlEditorField']['SEARCHFILENAME'] = 'Otsi failinime järgi';
$lang['et_EE']['HtmlEditorField']['SELECTALL'] = 'Vali kõik (Ctrl+A)';
$lang['et_EE']['HtmlEditorField']['UNDO'] = 'Võta tagasi (Ctrl+Z)';
$lang['et_EE']['HtmlEditorField']['UNLINK'] = 'Eemalda link';
$lang['et_EE']['HtmlEditorField']['UPLOAD'] = 'Lae üles';
$lang['et_EE']['HtmlEditorField']['URL'] = 'URL';
$lang['et_EE']['HtmlEditorField']['VISUALAID'] = 'Näita/peida juhtnöörid';
$lang['et_EE']['Image']['PLURALNAME'] = 'Failid';
$lang['et_EE']['Image']['SINGULARNAME'] = 'Fail';
$lang['et_EE']['ImageField']['NOTEADDIMAGES'] = 'Pilte saad lisata pärast esimest salvestamist.';
$lang['et_EE']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Ühest üleslaetud falidest';
$lang['et_EE']['ImageUploader']['ATTACH'] = 'Lisa %s';
$lang['et_EE']['ImageUploader']['DELETE'] = 'Kustuta %s';
$lang['et_EE']['ImageUploader']['FROMCOMPUTER'] = 'Lae arvutist';
$lang['et_EE']['ImageUploader']['FROMFILESTORE'] = 'Lae CMSist';
$lang['et_EE']['ImageUploader']['ONEFROMCOMPUTER'] = 'Lae arvutist';
$lang['et_EE']['ImageUploader']['REALLYDELETE'] = 'Soovid sa kindlasti eemaldada selle %s?';
$lang['et_EE']['ImageUploader']['REPLACE'] = 'Asenda %s';
$lang['et_EE']['Image_iframe.ss']['TITLE'] = 'Pildi üleslaadimise Iframe';
$lang['et_EE']['LoginAttempt']['Email'] = 'E-posti aadress';
$lang['et_EE']['LoginAttempt']['IP'] = 'IP Aadress';
$lang['et_EE']['LoginAttempt']['PLURALNAME'] = 'Sisselogimis katsed';
$lang['et_EE']['LoginAttempt']['SINGULARNAME'] = 'Sisselogimis katse';
$lang['et_EE']['LoginAttempt']['Status'] = 'Staatus';
$lang['et_EE']['Member']['ADDRESS'] = 'Aadress';
$lang['et_EE']['Member']['belongs_many_many_Groups'] = 'Grupid';
$lang['et_EE']['Member']['BUTTONCHANGEPASSWORD'] = 'Muuda parool';
$lang['et_EE']['Member']['BUTTONLOGIN'] = 'Logi sisse';
$lang['et_EE']['Member']['BUTTONLOGINOTHER'] = 'Logi sisse kellegi teisena';
$lang['et_EE']['Member']['BUTTONLOSTPASSWORD'] = 'Kaotasin oma parooli';
$lang['et_EE']['Member']['CONFIRMNEWPASSWORD'] = 'Kinnita uus parool';
$lang['et_EE']['Member']['CONFIRMPASSWORD'] = 'Kinnita parool';
$lang['et_EE']['Member']['CONTACTINFO'] = 'Kontakt informatsioon';
$lang['et_EE']['Member']['db_LastVisited'] = 'Viimati külastatud kuupäev';
$lang['et_EE']['Member']['db_Locale'] = 'kohalik välimus';
$lang['et_EE']['Member']['db_LockedOutUntil'] = 'Suletud kuni';
$lang['et_EE']['Member']['db_NumVisit'] = 'Külastusi kokku';
$lang['et_EE']['Member']['db_Password'] = 'Parool';
$lang['et_EE']['Member']['db_PasswordExpiry'] = 'Parool aegumise kuupäev';
$lang['et_EE']['Member']['EMAIL'] = 'E-post';
$lang['et_EE']['Member']['EMAILSIGNUPINTRO1'] = 'Täname, et registreerisite uueks kasutajaks, teie andmed on kirjeldatud allpool järgnevateks kordafeks';
$lang['et_EE']['Member']['EMAILSIGNUPINTRO2'] = 'Te saate siseneda kodulehele kasutades allolevaid andmeid';
$lang['et_EE']['Member']['EMAILSIGNUPSUBJECT'] = 'Täname registreerimast';
$lang['et_EE']['Member']['ENTEREMAIL'] = 'Palun sisesta email, et saada paooli tühistamise link';
$lang['et_EE']['Member']['ERRORLOCKEDOUT'] = 'Teie konto on hetkel blokeeritud, kuna proovisite valesti siseneda liiga palju kordi. Palun oodake 20 minutit ja proovige siis uuesti';
$lang['et_EE']['Member']['ERRORNEWPASSWORD'] = 'Te sisestasite oma parooli erinevalt, proovige uuesti';
$lang['et_EE']['Member']['ERRORPASSWORDNOTMATCH'] = 'Teie sisestatud paroolid ei katu, palun proovi uuesti';
$lang['et_EE']['Member']['ERRORWRONGCRED'] = 'Tundub, et e-posti aadress või parool on vale. Palun proovi uuesti.';
$lang['et_EE']['Member']['FIRSTNAME'] = 'Eesnimi';
$lang['et_EE']['Member']['GREETING'] = 'Tere tulemast';
$lang['et_EE']['Member']['INTERFACELANG'] = 'Kasutajaliidese keel';
$lang['et_EE']['Member']['LOGGEDINAS'] = 'Oled sisse logitud kui %s.';
$lang['et_EE']['Member']['MOBILE'] = 'Mobiil';
$lang['et_EE']['Member']['NAME'] = 'Nimi';
$lang['et_EE']['Member']['NEWPASSWORD'] = 'Uus parool';
$lang['et_EE']['Member']['PASSWORD'] = 'Parool';
$lang['et_EE']['Member']['PASSWORDCHANGED'] = 'Teie parool muudeti, ja koopia sellest saadeti emailile';
$lang['et_EE']['Member']['PERSONALDETAILS'] = 'Isikuandmed';
$lang['et_EE']['Member']['PHONE'] = 'Telefon';
$lang['et_EE']['Member']['PLURALNAME'] = 'Kasutajad';
$lang['et_EE']['Member']['PROFILESAVESUCCESS'] = 'Edukalt salvestatud';
$lang['et_EE']['Member']['REMEMBERME'] = 'Pea mind meeles?';
$lang['et_EE']['Member']['SECURITYGROUPS'] = 'Turva gruppid';
$lang['et_EE']['Member']['SINGULARNAME'] = 'Kasutaja';
$lang['et_EE']['Member']['SUBJECTPASSWORDCHANGED'] = 'Teie parool on muudetud';
$lang['et_EE']['Member']['SUBJECTPASSWORDRESET'] = 'Teie parooli algseadistamise link';
$lang['et_EE']['Member']['SURNAME'] = 'Perekonnanimi';
$lang['et_EE']['Member']['USERDETAILS'] = 'Kasutajaandmed';
$lang['et_EE']['Member']['VALIDATIONMEMBEREXISTS'] = 'Sellise e-posti aadressiga liige on juba olemas';
$lang['et_EE']['Member']['WELCOMEBACK'] = 'Tere tulemast tagasi, %s';
$lang['et_EE']['Member']['YOUROLDPASSWORD'] = 'Teie vana parool';
$lang['et_EE']['MemberAuthenticator']['TITLE'] = 'E-post ja parool';
$lang['et_EE']['MemberPassword']['PLURALNAME'] = 'Kasutaja paroolid';
$lang['et_EE']['MemberPassword']['SINGULARNAME'] = 'Kasutaja parool';
$lang['et_EE']['MyEntity']['MyNamespace'] = 'Minu peamine keel on';
$lang['et_EE']['MyNamespace']['MYENTITY'] = 'Loenda %s asju';
$lang['et_EE']['NumericField']['VALIDATION'] = '\'%s\' ei ole number, ainult numbrid on lubatud selles väljas';
$lang['et_EE']['NumericField']['VALIDATIONJS'] = 'See ei ole number, siia väljale saab sisestada vaid numbreid.';
$lang['et_EE']['Page']['PLURALNAME'] = 'Lehed';
$lang['et_EE']['Page']['SINGULARNAME'] = 'Leht';
$lang['et_EE']['Permission']['FULLADMINRIGHTS'] = 'Täis administraatori õigused';
$lang['et_EE']['Permission']['PERMSDEFINED'] = 'Elnevalt loetletud õigused on loodud';
$lang['et_EE']['Permission']['PLURALNAME'] = 'Õigused';
$lang['et_EE']['Permission']['SINGULARNAME'] = 'Õigus';
$lang['et_EE']['PhoneNumberField']['VALIDATION'] = 'Palun sisesta kehtiv telefoninumber';
$lang['et_EE']['QueuedEmail']['PLURALNAME'] = 'Ootel emailid';
$lang['et_EE']['QueuedEmail']['SINGULARNAME'] = 'Ootel email';
$lang['et_EE']['RedirectorPage']['HASBEENSETUP'] = 'Suunav lehekülg seati üles ilma, et ta kuhugile suunaks.';
$lang['et_EE']['RedirectorPage']['HEADER'] = 'See lehekülg suunab kasutajad teisele leheküljele';
$lang['et_EE']['RedirectorPage']['OTHERURL'] = 'Teise veebisaidi URL';
$lang['et_EE']['RedirectorPage']['PLURALNAME'] = 'Suunavad lehed';
$lang['et_EE']['RedirectorPage']['REDIRECTTO'] = 'Suuna ümber';
$lang['et_EE']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Teisele veebisaidile';
$lang['et_EE']['RedirectorPage']['REDIRECTTOPAGE'] = 'Leheküljele sinu veebisaidil';
$lang['et_EE']['RedirectorPage']['SINGULARNAME'] = 'Suunav leht';
$lang['et_EE']['RedirectorPage']['YOURPAGE'] = 'Lehekülg sinu veebisaidil';
$lang['et_EE']['RelationComplexTableField.ss']['ADD'] = 'Lisa';
$lang['et_EE']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Ekspordi - CSV-sse';
$lang['et_EE']['RelationComplexTableField.ss']['DELETE'] = 'Kustuta';
$lang['et_EE']['RelationComplexTableField.ss']['EDIT'] = 'Muuda';
$lang['et_EE']['RelationComplexTableField.ss']['NOTFOUND'] = 'Ei leidnud ühtegi asja';
$lang['et_EE']['RelationComplexTableField.ss']['SHOW'] = 'Näita';
$lang['et_EE']['SearchForm']['GO'] = 'Mine';
$lang['et_EE']['SearchForm']['SEARCH'] = 'Otsi';
$lang['et_EE']['Security']['ALREADYLOGGEDIN'] = 'Teil puudub õigus lehe nägemiseks. Kui teil on teine konto lehele pääsemiseks kasutage seda allpool';
$lang['et_EE']['Security']['BUTTONSEND'] = 'Saada parooli tühistamise link';
$lang['et_EE']['Security']['CHANGEPASSWORDBELOW'] = 'Saad muuta oma parooli allpool.';
$lang['et_EE']['Security']['CHANGEPASSWORDHEADER'] = 'Muuda oma parool';
$lang['et_EE']['Security']['EMAIL'] = 'E-post:';
$lang['et_EE']['Security']['ENCDISABLED1'] = 'Parooli krüptimine ei ole kehtestatud';
$lang['et_EE']['Security']['ENCDISABLED2'] = 'Et krüpteerida oma parooli muutmine muuda oma parooli seadeid lisades';
$lang['et_EE']['Security']['ENCDISABLED3'] = 'see mysite/_config.php faili';
$lang['et_EE']['Security']['ENCRYPT'] = 'Krüpteeri kõik paroolid';
$lang['et_EE']['Security']['ENCRYPTEDMEMBERS'] = 'Krüpteeritud admned kasutajale &quot;';
$lang['et_EE']['Security']['ENCRYPTWITH'] = 'Paroolid krüptitakse kasutades &quot;%s&quot; algorütmi';
$lang['et_EE']['Security']['ENCRYPTWITHOUTSALT'] = 'Ei vaja turvalisuse tõstmist';
$lang['et_EE']['Security']['ENCRYPTWITHSALT'] = 'Tõstab turvalisust';
$lang['et_EE']['Security']['ENTERNEWPASSWORD'] = 'Palun sisesta uus parool.';
$lang['et_EE']['Security']['ERRORPASSWORDPERMISSION'] = 'Pead olema sisseloginud, et parooli muuta!';
$lang['et_EE']['Security']['ID'] = 'ID:';
$lang['et_EE']['Security']['IPADDRESSES'] = 'IP Aadressid';
$lang['et_EE']['Security']['LOGGEDOUT'] = 'Olete välja loginud. Kui soovite uuesti siseneda, sisestage oma andmed allpool';
$lang['et_EE']['Security']['LOGIN'] = 'Logi sisse';
$lang['et_EE']['Security']['LOSTPASSWORDHEADER'] = 'Unustatud parool';
$lang['et_EE']['Security']['NOTEPAGESECURED'] = 'See leht on turvatud. Sisesta enda andmed allpool ja me saadame sind otse edasi';
$lang['et_EE']['Security']['NOTERESETLINKINVALID'] = '<p>Parooli tühistamise link on vale või aegunud.</p><p>Saad küsida uue <a href="%s">siit</a> või muuta oma parooli peale <a href="%s">sisenemist siit</a>.</p>';
$lang['et_EE']['Security']['NOTERESETPASSWORD'] = 'Sisesta oma email ja me saadame sulle lingi kus saad oma parooli tühistada.';
$lang['et_EE']['Security']['NOTHINGTOENCRYPT1'] = 'Pole paroole mida krüpteerida';
$lang['et_EE']['Security']['NOTHINGTOENCRYPT2'] = 'Pole kasutajaid lihtsa parooliga mida saaks krüpteerida';
$lang['et_EE']['Security']['PASSWORDSENTHEADER'] = 'Parooli tühistus link saadetud \'%s\'';
$lang['et_EE']['Security']['PASSWORDSENTTEXT'] = 'Täname ! Parooli tühistus link on saadetud \'%s\'.';
$lang['et_EE']['Security']['PERMFAILURE'] = 'See on turvatud leht sul peavad olema administratoori õigused, et siia siise logida. Sisesta oma andmed allpool';
$lang['et_EE']['SecurityAdmin']['ADVANCEDONLY'] = 'See osa lehest on ainult kindlale seltskonnale. Vaata <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">siit lähemalt</a>, et saada täpsem ülevaade';
$lang['et_EE']['SecurityAdmin']['CODE'] = 'Kood';
$lang['et_EE']['SecurityAdmin']['GROUPNAME'] = 'Rühma nimi';
$lang['et_EE']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Saad piirata ligipääsu lehele  (üks IP rea kohta). <br />Näited: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Kui sisestad ühe või rohkem IP aadresside vahemike siia kasti, siis kasutajad saavad sisse vaid õigete IP aadrsside kaudu. See ei keela neil sisselogimast. Kuna nad võivad tulla aadressilt mida pole siis loetletud.';
$lang['et_EE']['SecurityAdmin']['MEMBERS'] = 'Kasutajad';
$lang['et_EE']['SecurityAdmin']['OPTIONALID'] = 'Vabalvalikul ID';
$lang['et_EE']['SecurityAdmin']['PERMISSIONS'] = 'Õigused';
$lang['et_EE']['SecurityAdmin']['VIEWUSER'] = 'Vaata kasutajat';
$lang['et_EE']['SimpleImageField']['NOUPLOAD'] = 'Pilti pole üles laetud';
$lang['et_EE']['SiteTree']['ACCESSANYONE'] = 'Igaüks';
$lang['et_EE']['SiteTree']['ACCESSHEADER'] = 'Kes tohib seda lehekülge minu veebisaidil vaadata?';
$lang['et_EE']['SiteTree']['ACCESSLOGGEDIN'] = 'Sisse logitud kasutajad';
$lang['et_EE']['SiteTree']['ACCESSONLYTHESE'] = 'Ainult järgnevad isikud (vali nimekirjast)';
$lang['et_EE']['SiteTree']['ADDEDTODRAFT'] = 'Lisatud mustandite hulka';
$lang['et_EE']['SiteTree']['ALLOWCOMMENTS'] = 'Luba kommentaare sellel lehel?';
$lang['et_EE']['SiteTree']['APPEARSVIRTUALPAGES'] = 'See sisu avaneb samuti virtuaal lehtedel %s seksioonis';
$lang['et_EE']['SiteTree']['BUTTONCANCELDRAFT'] = 'Tühista visandi muudatused';
$lang['et_EE']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Kustuta oma visand ja pöördu tagasi hetkel avaldatud lehekülje kujule';
$lang['et_EE']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Salvesta ja avalda';
$lang['et_EE']['SiteTree']['BUTTONUNPUBLISH'] = 'Maha võtma';
$lang['et_EE']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Eemalda see lehekülg avalikult saidilt';
$lang['et_EE']['SiteTree']['CHANGETO'] = 'Muudeti "%s"';
$lang['et_EE']['SiteTree']['Comments'] = 'Komentaarid';
$lang['et_EE']['SiteTree']['Content'] = 'Sisu';
$lang['et_EE']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Saad selle lehe sisu muuta või selle lehe kustutada.<br /></p>';
$lang['et_EE']['SiteTree']['DEFAULTABOUTTITLE'] = 'Meist';
$lang['et_EE']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>võid selle lehe sisu muuta või selle ära kustutada.<br /></p>';
$lang['et_EE']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Kontakt';
$lang['et_EE']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Tere tulemast kasutama SilverStripe! sisuhaldust, see on algne avaleht.<br>Saad seda muuta <a href="admin/">Sisuhalduse lehel</a>. <br>Abiks on ka <a href="http://doc.silverstripe.com">Sisuhalduse dokumentatsioon</a> või <a href="http://doc.silverstripe.com/doku.php?id=tutorials">õppetus leht.</a></p>';
$lang['et_EE']['SiteTree']['DEFAULTHOMETITLE'] = 'Avaleht';
$lang['et_EE']['SiteTree']['EDITANYONE'] = 'Igaüks, kes sisuhaldussüsteemi sisse võib logida';
$lang['et_EE']['SiteTree']['EDITHEADER'] = 'Kes tohib seda sisuhaldussüsteemi kaudu muuta?';
$lang['et_EE']['SiteTree']['EDITONLYTHESE'] = 'Ainult järgnevad isikud (vali nimekirjast)';
$lang['et_EE']['SiteTree']['Editors'] = 'Toimetajate gruppid';
$lang['et_EE']['SiteTree']['GROUP'] = 'Rühm';
$lang['et_EE']['SiteTree']['HASBROKENLINKS'] = 'Sellel lehel on katkiseid linke.';
$lang['et_EE']['SiteTree']['has_one_Parent'] = 'Vanem leht';
$lang['et_EE']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domeen(id)';
$lang['et_EE']['SiteTree']['HomepageForDomain'] = 'Avaleht sellele domeenile';
$lang['et_EE']['SiteTree']['HTMLEDITORTITLE'] = 'Sisu';
$lang['et_EE']['SiteTree']['INHERIT'] = 'Päring vanemalt lehelt';
$lang['et_EE']['SiteTree']['many_many_BackLinkTracking'] = 'Tagasilingi jälgimine';
$lang['et_EE']['SiteTree']['many_many_ImageTracking'] = 'Pildi jälgimine';
$lang['et_EE']['SiteTree']['many_many_LinkTracking'] = 'Lingi jälgimine';
$lang['et_EE']['SiteTree']['MENUTITLE'] = 'Navigatsiooni silt';
$lang['et_EE']['SiteTree']['METADESC'] = 'Kirjeldus';
$lang['et_EE']['SiteTree']['METAEXTRA'] = 'Kohandatud metamärgendid';
$lang['et_EE']['SiteTree']['METAHEADER'] = 'Otsingumootori metamärgendid';
$lang['et_EE']['SiteTree']['METAKEYWORDS'] = 'Märksõnad';
$lang['et_EE']['SiteTree']['METATITLE'] = 'Pealkiri';
$lang['et_EE']['SiteTree']['MODIFIEDONDRAFT'] = 'Muudetud mustandites';
$lang['et_EE']['SiteTree']['NOBACKLINKS'] = 'Seda lehte ei lingita üheltki leheküljelt.';
$lang['et_EE']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Kasuta seda lehekülge avalehena järgnevatele domeenidele: (eralda domeenid komadega)';
$lang['et_EE']['SiteTree']['PAGESLINKING'] = 'Sellele lehele lingivad järgnevad leheküljed:';
$lang['et_EE']['SiteTree']['PAGETITLE'] = 'Lehekülje nimi';
$lang['et_EE']['SiteTree']['PAGETYPE'] = 'Lehe tüüp';
$lang['et_EE']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'Kontroli millised gruppid saavad ligipääsu ja võimaluse muuta mingeid lehti';
$lang['et_EE']['SiteTree']['PLURALNAME'] = 'Sisukorrad';
$lang['et_EE']['SiteTree']['REMOVEDFROMDRAFT'] = 'Eemaldatud mustandite lehelt';
$lang['et_EE']['SiteTree']['SHOWINMENUS'] = 'Näita menüüdes?';
$lang['et_EE']['SiteTree']['SHOWINSEARCH'] = 'Näita otsingus?';
$lang['et_EE']['SiteTree']['SINGULARNAME'] = 'Sisukord';
$lang['et_EE']['SiteTree']['TABACCESS'] = 'Ligipääs';
$lang['et_EE']['SiteTree']['TABBACKLINKS'] = 'BackLingid';
$lang['et_EE']['SiteTree']['TABBEHAVIOUR'] = 'Käitumine';
$lang['et_EE']['SiteTree']['TABCONTENT'] = 'Sisu';
$lang['et_EE']['SiteTree']['TABMAIN'] = 'Avaleht';
$lang['et_EE']['SiteTree']['TABMETA'] = 'Meta-andmed';
$lang['et_EE']['SiteTree']['TABREPORTS'] = 'Aruanded';
$lang['et_EE']['SiteTree']['ToDo'] = 'Toimingute märkused';
$lang['et_EE']['SiteTree']['TODOHELP'] = '<p>siia võid kirjutada ülesanded mis tuleb sellel lehel veel teha</p>';
$lang['et_EE']['SiteTree']['TOPLEVEL'] = 'Lehe sisu (kõrgeim tase)';
$lang['et_EE']['SiteTree']['URL'] = 'URL';
$lang['et_EE']['SiteTree']['URLSegment'] = 'URL-i jagu';
$lang['et_EE']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Seda URLi kasutab teine lehekülg. URL peab igal lehel unikaalne olema';
$lang['et_EE']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URLid võivad sisaldada ainult tähti, numbreid ja sidekriipse.';
$lang['et_EE']['SiteTree']['Viewers'] = 'Vaatajate gruppid';
$lang['et_EE']['TableField']['ISREQUIRED'] = '%s on \'%s\' vajalik';
$lang['et_EE']['TableField.ss']['ADD'] = 'Lisa uus rida';
$lang['et_EE']['TableField.ss']['CSVEXPORT'] = 'Ekspordi CSV';
$lang['et_EE']['TableListField']['CSVEXPORT'] = 'Ekspordi CSV-sse';
$lang['et_EE']['TableListField']['PRINT'] = 'Prindi';
$lang['et_EE']['TableListField_PageControls.ss']['DISPLAYING'] = 'Näitab';
$lang['et_EE']['TableListField_PageControls.ss']['OF'] = '-';
$lang['et_EE']['TableListField_PageControls.ss']['TO'] = '-';
$lang['et_EE']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Vaata esimest';
$lang['et_EE']['TableListField_PageControls.ss']['VIEWLAST'] = 'Vaata viimast';
$lang['et_EE']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Vaata järgmist';
$lang['et_EE']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Vaata eelmist';
$lang['et_EE']['ToggleCompositeField.ss']['HIDE'] = 'Peida';
$lang['et_EE']['ToggleCompositeField.ss']['SHOW'] = 'Näita';
$lang['et_EE']['ToggleField']['LESS'] = 'Vähem';
$lang['et_EE']['ToggleField']['MORE'] = 'Veel';
$lang['et_EE']['Translatable']['CREATE'] = 'Tee uus tõlge';
$lang['et_EE']['Translatable']['CREATEBUTTON'] = 'Loo';
$lang['et_EE']['Translatable']['EXISTING'] = 'Olemas olevad tõlked';
$lang['et_EE']['Translatable']['NEWLANGUAGE'] = 'Uus keel';
$lang['et_EE']['Translatable']['TRANSLATIONS'] = 'Tõlked';
$lang['et_EE']['TreeSelectorField']['CANCEL'] = 'Tühista';
$lang['et_EE']['TreeSelectorField']['SAVE'] = 'Salvesta';
$lang['et_EE']['TypeDropdown']['NONE'] = 'puudub';
$lang['et_EE']['Versioned']['has_many_Versions'] = 'Versioon';
$lang['et_EE']['VirtualPage']['CHOOSE'] = 'Vali leht millega linkida';
$lang['et_EE']['VirtualPage']['EDITCONTENT'] = 'Vajuta siia et sisu muuta';
$lang['et_EE']['VirtualPage']['HEADER'] = 'See on virtuaalne leht';
$lang['et_EE']['VirtualPage']['PLURALNAME'] = 'Suunavad lehed';
$lang['et_EE']['VirtualPage']['SINGULARNAME'] = 'Suunav leht';
$lang['et_EE']['Widget']['PLURALNAME'] = 'Vidinad';
$lang['et_EE']['Widget']['SINGULARNAME'] = 'Vidin';
$lang['et_EE']['WidgetArea']['PLURALNAME'] = 'Vidina piirkonnad';
$lang['et_EE']['WidgetArea']['SINGULARNAME'] = 'Vidina piirkond';