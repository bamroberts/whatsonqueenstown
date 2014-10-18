<?php

/**
 * English (United Kingdom) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('en_GB', $lang) && is_array($lang['en_GB'])) {
	$lang['en_GB'] = array_merge($lang['en_US'], $lang['en_GB']);
} else {
	$lang['en_GB'] = $lang['en_US'];
}

$lang['en_GB']['AdvancedSearchForm']['ALLWORDS'] = 'All Words';
$lang['en_GB']['AdvancedSearchForm']['ATLEAST'] = 'At Least One Of the Words';
$lang['en_GB']['AdvancedSearchForm']['EXACT'] = 'Exact Phrase';
$lang['en_GB']['AdvancedSearchForm']['FROM'] = 'From';
$lang['en_GB']['AdvancedSearchForm']['GO'] = 'Go';
$lang['en_GB']['AdvancedSearchForm']['LASTUPDATED'] = 'Last Updated';
$lang['en_GB']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'LAST UPDATED';
$lang['en_GB']['AdvancedSearchForm']['PAGETITLE'] = 'Page Title';
$lang['en_GB']['AdvancedSearchForm']['RELEVANCE'] = 'Relevance';
$lang['en_GB']['AdvancedSearchForm']['SEARCHBY'] = 'SEARCH BY';
$lang['en_GB']['AdvancedSearchForm']['SORTBY'] = 'SORT RESULTS BY';
$lang['en_GB']['AdvancedSearchForm']['TO'] = 'To';
$lang['en_GB']['AdvancedSearchForm']['WITHOUT'] = 'Without the Words';
$lang['en_GB']['BankAccountField']['VALIDATIONJS'] = 'Please enter a valid bank number';
$lang['en_GB']['BasicAuth']['ENTERINFO'] = 'Please enter a username and password.';
$lang['en_GB']['BasicAuth']['ERRORNOTADMIN'] = 'That user is not an administrator.';
$lang['en_GB']['BasicAuth']['ERRORNOTREC'] = 'That username / password isn\'t recognised';
$lang['en_GB']['BBCodeParser']['ALIGNEMENT'] = 'Alignment';
$lang['en_GB']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'right aligned';
$lang['en_GB']['BBCodeParser']['BOLD'] = 'Bold Text';
$lang['en_GB']['BBCodeParser']['BOLDEXAMPLE'] = 'Bold';
$lang['en_GB']['BBCodeParser']['CODE'] = 'Code Block';
$lang['en_GB']['BBCodeParser']['CODEDESCRIPTION'] = 'Unformatted code block';
$lang['en_GB']['BBCodeParser']['CODEEXAMPLE'] = 'Code block';
$lang['en_GB']['BBCodeParser']['COLORED'] = 'Coloured text';
$lang['en_GB']['BBCodeParser']['COLOREDEXAMPLE'] = 'blue text';
$lang['en_GB']['BBCodeParser']['EMAILLINK'] = 'Email link';
$lang['en_GB']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Create link to an email address';
$lang['en_GB']['BBCodeParser']['IMAGE'] = 'Image';
$lang['en_GB']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Show an image in your post';
$lang['en_GB']['BBCodeParser']['ITALIC'] = 'Italic Text';
$lang['en_GB']['BBCodeParser']['ITALICEXAMPLE'] = 'Italic Text';
$lang['en_GB']['BBCodeParser']['LINK'] = 'Website link';
$lang['en_GB']['BBCodeParser']['LINKDESCRIPTION'] = 'Link to another website or URL';
$lang['en_GB']['BBCodeParser']['STRUCK'] = 'Struck-out Text';
$lang['en_GB']['BBCodeParser']['STRUCKEXAMPLE'] = 'Struck-out';
$lang['en_GB']['BBCodeParser']['UNDERLINE'] = 'Underlined Text';
$lang['en_GB']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Underlined';
$lang['en_GB']['BBCodeParser']['UNORDERED'] = 'Unordered list';
$lang['en_GB']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Unordered list';
$lang['en_GB']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'unordered item 1';
$lang['en_GB']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'You changed your password for';
$lang['en_GB']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'You can now use the following credentials to log in:';
$lang['en_GB']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['en_GB']['ChangePasswordEmail.ss']['HELLO'] = 'Hello';
$lang['en_GB']['ChangePasswordEmail.ss']['PASSWORD'] = 'Password';
$lang['en_GB']['CMSMain']['DELETE'] = 'Delete from the draft site';
$lang['en_GB']['CMSMain']['DELETEFP'] = 'Delete from the published site';
$lang['en_GB']['CMSMain']['RESTORE'] = 'Restore';
$lang['en_GB']['CMSMain']['SAVE'] = 'Save';
$lang['en_GB']['ComplexTableField']['CLOSEPOPUP'] = 'Close Popup';
$lang['en_GB']['ComplexTableField.ss']['ADDITEM'] = 'Add %s';
$lang['en_GB']['ComplexTableField.ss']['CSVEXPORT'] = 'Export to CSV';
$lang['en_GB']['ComplexTableField.ss']['NOITEMSFOUND'] = 'No items found';
$lang['en_GB']['ComplexTableField.ss']['SORTASC'] = 'Sort ascending';
$lang['en_GB']['ComplexTableField.ss']['SORTDESC'] = 'Sort descending';
$lang['en_GB']['ComplexTableField']['SUCCESSADD'] = 'Added %s %s %s';
$lang['en_GB']['ComplexTableField']['SUCCESSEDIT'] = 'Saved %s %s %s';
$lang['en_GB']['ComplexTableField_popup.ss']['NEXT'] = 'Next';
$lang['en_GB']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Previous';
$lang['en_GB']['CompositeDateField']['DAY'] = 'Day';
$lang['en_GB']['CompositeDateField']['DAYJS'] = 'day';
$lang['en_GB']['CompositeDateField']['MONTH'] = 'Month';
$lang['en_GB']['CompositeDateField']['MONTHJS'] = 'month';
$lang['en_GB']['CompositeDateField']['VALIDATIONJS1'] = 'Please ensure you have set the';
$lang['en_GB']['CompositeDateField']['VALIDATIONJS2'] = 'correctly.';
$lang['en_GB']['CompositeDateField']['YEARJS'] = 'year';
$lang['en_GB']['ConfirmedFormAction']['CONFIRMATION'] = 'Are you certain?';
$lang['en_GB']['ConfirmedPasswordField']['ATLEAST'] = 'Passwords must be at least %s characters long.';
$lang['en_GB']['ConfirmedPasswordField']['BETWEEN'] = 'Passwords must be %s to %s characters long.';
$lang['en_GB']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Passwords have to match.';
$lang['en_GB']['ConfirmedPasswordField']['LEASTONE'] = 'Passwords must have at least one digit and one alphanumeric character.';
$lang['en_GB']['ConfirmedPasswordField']['MAXIMUM'] = 'Passwords must be at most %s characters long.';
$lang['en_GB']['ConfirmedPasswordField']['NOEMPTY'] = 'Passwords can\'t be empty.';
$lang['en_GB']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Change Password';
$lang['en_GB']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'You must log in with your CMS password in order to view the draft or archived content. <a href="%s">Click here to go back to the published site.</a>';
$lang['en_GB']['Controller']['FILE'] = 'File';
$lang['en_GB']['Controller']['IMAGE'] = 'Image';
$lang['en_GB']['CreditCardField']['FIRST'] = 'first';
$lang['en_GB']['CreditCardField']['FOURTH'] = 'fourth';
$lang['en_GB']['CreditCardField']['SECOND'] = 'second';
$lang['en_GB']['CreditCardField']['THIRD'] = 'third';
$lang['en_GB']['CreditCardField']['VALIDATIONJS1'] = 'Please ensure you have entered the';
$lang['en_GB']['CreditCardField']['VALIDATIONJS2'] = 'credit card number correctly.';
$lang['en_GB']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['en_GB']['CurrencyField']['VALIDATIONJS'] = 'Please enter a valid currency.';
$lang['en_GB']['DataObject']['PLURALNAME'] = 'Data Objects';
$lang['en_GB']['DataObject']['SINGULARNAME'] = 'Data Object';
$lang['en_GB']['Date']['DAY'] = 'day';
$lang['en_GB']['Date']['DAYS'] = 'days';
$lang['en_GB']['Date']['HOUR'] = 'hour';
$lang['en_GB']['Date']['HOURS'] = 'hours';
$lang['en_GB']['Date']['MIN'] = 'min';
$lang['en_GB']['Date']['MINS'] = 'mins';
$lang['en_GB']['Date']['MONTH'] = 'month';
$lang['en_GB']['Date']['MONTHS'] = ' months';
$lang['en_GB']['Date']['SEC'] = 'sec';
$lang['en_GB']['Date']['SECS'] = 'secs';
$lang['en_GB']['Date']['TIMEDIFFAGO'] = '%s ago';
$lang['en_GB']['Date']['TIMEDIFFAWAY'] = '% away';
$lang['en_GB']['Date']['YEAR'] = 'year';
$lang['en_GB']['Date']['YEARS'] = 'years';
$lang['en_GB']['DateField']['NOTSET'] = 'not set';
$lang['en_GB']['DateField']['TODAY'] = 'today';
$lang['en_GB']['DateField']['VALIDATIONJS'] = 'Please enter a valid date format (DD/MM/YYYY).';
$lang['en_GB']['DateField']['VALIDDATEFORMAT'] = 'Please enter a valid time format.';
$lang['en_GB']['DMYDateField']['VALIDDATEFORMAT'] = 'Please enter a valid date format (DD-MM-YYYY).';
$lang['en_GB']['DropdownField']['CHOOSE'] = '(Choose)';
$lang['en_GB']['EmailField']['VALIDATION'] = 'Please enter an email address.';
$lang['en_GB']['EmailField']['VALIDATIONJS'] = 'Please enter an email address.';
$lang['en_GB']['ErrorPage']['400'] = '400 - Bad Request';
$lang['en_GB']['ErrorPage']['401'] = '401 - Unauthorised';
$lang['en_GB']['ErrorPage']['403'] = '403 - Forbidden';
$lang['en_GB']['ErrorPage']['404'] = '404 - Not Found';
$lang['en_GB']['ErrorPage']['405'] = '405 - Method Not Allowed';
$lang['en_GB']['ErrorPage']['406'] = '406 - Not Acceptable';
$lang['en_GB']['ErrorPage']['407'] = '407 - Proxy Authentication Required';
$lang['en_GB']['ErrorPage']['408'] = '408 - Request Timeout';
$lang['en_GB']['ErrorPage']['409'] = '409 - Conflict';
$lang['en_GB']['ErrorPage']['410'] = '410 - Gone';
$lang['en_GB']['ErrorPage']['411'] = '411 - Length Required';
$lang['en_GB']['ErrorPage']['412'] = '412 - Precondition Failed';
$lang['en_GB']['ErrorPage']['413'] = '413 - Request Entity Too Large';
$lang['en_GB']['ErrorPage']['414'] = '414 - Request-URI Too Long';
$lang['en_GB']['ErrorPage']['415'] = '415 - Unsupported Media Type';
$lang['en_GB']['ErrorPage']['416'] = '416 - Request Range Not Satisfiable';
$lang['en_GB']['ErrorPage']['417'] = '417 - Expectation Failed';
$lang['en_GB']['ErrorPage']['500'] = '500 - Internal Server Error';
$lang['en_GB']['ErrorPage']['501'] = '501 - Not Implemented';
$lang['en_GB']['ErrorPage']['502'] = '502 - Bad Gateway';
$lang['en_GB']['ErrorPage']['503'] = '503 - Service Unavailable';
$lang['en_GB']['ErrorPage']['504'] = '504 - Gateway Timeout';
$lang['en_GB']['ErrorPage']['505'] = '505 - HTTP Version Not Supported';
$lang['en_GB']['ErrorPage']['CODE'] = 'Error code';
$lang['en_GB']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Sorry, it seems you were trying to access a page that doesn\'t exist.</p><p>Please check the spelling of the URL you were trying to access and try again.</p>';
$lang['en_GB']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Page not found';
$lang['en_GB']['ErrorPage']['PLURALNAME'] = 'Error Pages';
$lang['en_GB']['ErrorPage']['SINGULARNAME'] = 'Error Page';
$lang['en_GB']['File']['Content'] = 'Content';
$lang['en_GB']['File']['Filename'] = 'Filename';
$lang['en_GB']['File']['INVALIDEXTENSION'] = 'Extension is not allowed (valid: %s)';
$lang['en_GB']['File']['Name'] = 'Name';
$lang['en_GB']['File']['NOFILESIZE'] = 'File size is zero bytes.';
$lang['en_GB']['File']['PLURALNAME'] = 'Files';
$lang['en_GB']['File']['SINGULARNAME'] = 'File';
$lang['en_GB']['File']['Sort'] = 'Sort Order';
$lang['en_GB']['File']['Title'] = 'Title';
$lang['en_GB']['File']['TOOLARGE'] = 'Filesize is too large; maximum %s is allowed.';
$lang['en_GB']['FileIFrameField']['NOTEADDFILES'] = 'You can add files once you have saved for the first time.';
$lang['en_GB']['Folder']['CREATED'] = 'First Uploaded';
$lang['en_GB']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Delete unused thumbnails';
$lang['en_GB']['Folder']['DELSELECTED'] = 'Delete selected files';
$lang['en_GB']['Folder']['DETAILSTAB'] = 'Details';
$lang['en_GB']['Folder']['FILENAME'] = 'Filename';
$lang['en_GB']['Folder']['FILESTAB'] = 'Files';
$lang['en_GB']['Folder']['LASTEDITED'] = 'Last Updated';
$lang['en_GB']['Folder']['PLURALNAME'] = 'Files';
$lang['en_GB']['Folder']['SINGULARNAME'] = 'File';
$lang['en_GB']['Folder']['TITLE'] = 'Title';
$lang['en_GB']['Folder']['TYPE'] = 'Type';
$lang['en_GB']['Folder']['UNUSEDFILESTAB'] = 'Unused files';
$lang['en_GB']['Folder']['UNUSEDFILESTITLE'] = 'Unused files';
$lang['en_GB']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Unused thumbnails';
$lang['en_GB']['Folder']['UPLOADTAB'] = 'Upload';
$lang['en_GB']['Folder']['URL'] = 'URL';
$lang['en_GB']['Folder']['VIEWASSET'] = 'View Asset';
$lang['en_GB']['Folder']['VIEWEDITASSET'] = 'View/Edit Asset';
$lang['en_GB']['ForgotPasswordEmail.ss']['HELLO'] = 'Hello';
$lang['en_GB']['ForgotPasswordEmail.ss']['TEXT1'] = 'Here is your';
$lang['en_GB']['ForgotPasswordEmail.ss']['TEXT2'] = 'password reset link';
$lang['en_GB']['ForgotPasswordEmail.ss']['TEXT3'] = 'for';
$lang['en_GB']['Form']['DATENOTSET'] = '(No date set)';
$lang['en_GB']['Form']['FIELDISREQUIRED'] = '%s is required.';
$lang['en_GB']['Form']['LANGAOTHER'] = 'Other languages';
$lang['en_GB']['Form']['LANGAVAIL'] = 'Available languages';
$lang['en_GB']['Form']['NOTSET'] = '(not set)';
$lang['en_GB']['Form']['VALIDATIONALLDATEVALUES'] = 'Please ensure you have set all date values';
$lang['en_GB']['Form']['VALIDATIONBANKACC'] = 'Please enter a valid bank number';
$lang['en_GB']['Form']['VALIDATIONCREDITNUMBER'] = 'Please ensure you have entered the %s credit card number correctly.';
$lang['en_GB']['Form']['VALIDATIONFAILED'] = 'Validation failed';
$lang['en_GB']['Form']['VALIDATIONNOTUNIQUE'] = 'The value entered is not unique';
$lang['en_GB']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Passwords don\'t match';
$lang['en_GB']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Passwords can\'t be empty';
$lang['en_GB']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Passwords must have at least one digit and one alphanumeric character.';
$lang['en_GB']['Form']['VALIDATOR'] = 'Validator';
$lang['en_GB']['Form']['VALIDCURRENCY'] = 'Please enter a valid currency.';
$lang['en_GB']['FormField']['NONE'] = 'none';
$lang['en_GB']['GhostPage']['NOLINKED'] = 'This ghost page has no linked page.';
$lang['en_GB']['GhostPage']['PLURALNAME'] = 'Ghost Pages';
$lang['en_GB']['GhostPage']['SINGULARNAME'] = 'Ghost Page';
$lang['en_GB']['Group']['Code'] = 'Group Code';
$lang['en_GB']['Group']['Description'] = 'Description';
$lang['en_GB']['Group']['has_many_Permissions'] = 'Permissions';
$lang['en_GB']['Group']['IPRestrictions'] = 'IP Address Restrictions';
$lang['en_GB']['Group']['Locked'] = 'Locked?';
$lang['en_GB']['Group']['many_many_Members'] = 'Members';
$lang['en_GB']['Group']['Parent'] = 'Parent Group';
$lang['en_GB']['Group']['PLURALNAME'] = 'Groups';
$lang['en_GB']['Group']['SINGULARNAME'] = 'Group';
$lang['en_GB']['Group']['Sort'] = 'Sort Order';
$lang['en_GB']['GSTNumberField']['VALIDATION'] = 'Please enter a valid GST Number';
$lang['en_GB']['GSTNumberField']['VALIDATIONJS'] = 'Please enter a valid GST Number';
$lang['en_GB']['HtmlEditorField']['ALTTEXT'] = 'Description';
$lang['en_GB']['HtmlEditorField']['ANCHOR'] = 'Insert/edit anchor';
$lang['en_GB']['HtmlEditorField']['ANCHORVALUE'] = 'Anchor';
$lang['en_GB']['HtmlEditorField']['BULLETLIST'] = 'Bullet-point list';
$lang['en_GB']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Align center';
$lang['en_GB']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Justify';
$lang['en_GB']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Align left';
$lang['en_GB']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Align right';
$lang['en_GB']['HtmlEditorField']['BUTTONBOLD'] = 'Bold (Ctrl+B)';
$lang['en_GB']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Insert Flash';
$lang['en_GB']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Insert image';
$lang['en_GB']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Insert link';
$lang['en_GB']['HtmlEditorField']['BUTTONITALIC'] = 'Italic (Ctrl+I)';
$lang['en_GB']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Remove link';
$lang['en_GB']['HtmlEditorField']['BUTTONSTRIKE'] = 'strikethrough';
$lang['en_GB']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Underline (Ctrl+U)';
$lang['en_GB']['HtmlEditorField']['CHARMAP'] = 'Insert symbol';
$lang['en_GB']['HtmlEditorField']['CLOSE'] = 'close';
$lang['en_GB']['HtmlEditorField']['COPY'] = 'Copy (Ctrl+C)';
$lang['en_GB']['HtmlEditorField']['CREATEFOLDER'] = 'Create Folder';
$lang['en_GB']['HtmlEditorField']['CSSCLASS'] = 'Alignment / style';
$lang['en_GB']['HtmlEditorField']['CSSCLASSCENTER'] = 'Centred, on its own.';
$lang['en_GB']['HtmlEditorField']['CSSCLASSLEFT'] = 'On the left, with text wrapping around.';
$lang['en_GB']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'On the left, on its own.';
$lang['en_GB']['HtmlEditorField']['CSSCLASSRIGHT'] = 'On the right, with text wrapping around.';
$lang['en_GB']['HtmlEditorField']['CUT'] = 'Cut (Ctrl+X)';
$lang['en_GB']['HtmlEditorField']['DELETECOL'] = 'Delete column';
$lang['en_GB']['HtmlEditorField']['DELETEROW'] = 'Delete row';
$lang['en_GB']['HtmlEditorField']['EDITCODE'] = 'Edit HTML Code';
$lang['en_GB']['HtmlEditorField']['EMAIL'] = 'Email address';
$lang['en_GB']['HtmlEditorField']['FILE'] = 'File';
$lang['en_GB']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['en_GB']['HtmlEditorField']['FOLDER'] = 'Folder';
$lang['en_GB']['HtmlEditorField']['FOLDERCANCEL'] = 'Cancel';
$lang['en_GB']['HtmlEditorField']['FORMATADDR'] = 'Address';
$lang['en_GB']['HtmlEditorField']['FORMATH1'] = 'Heading 1';
$lang['en_GB']['HtmlEditorField']['FORMATH2'] = 'Heading 2';
$lang['en_GB']['HtmlEditorField']['FORMATH3'] = 'Heading 3';
$lang['en_GB']['HtmlEditorField']['FORMATH4'] = 'Heading 4';
$lang['en_GB']['HtmlEditorField']['FORMATH5'] = 'Heading 5';
$lang['en_GB']['HtmlEditorField']['FORMATH6'] = 'Heading 6';
$lang['en_GB']['HtmlEditorField']['FORMATP'] = 'Paragraph';
$lang['en_GB']['HtmlEditorField']['FORMATPRE'] = 'Preformatted';
$lang['en_GB']['HtmlEditorField']['HR'] = 'Insert horizontal line';
$lang['en_GB']['HtmlEditorField']['IMAGE'] = 'Image';
$lang['en_GB']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensions';
$lang['en_GB']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Height';
$lang['en_GB']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Width';
$lang['en_GB']['HtmlEditorField']['INDENT'] = 'Increase indent';
$lang['en_GB']['HtmlEditorField']['INSERTCOLAFTER'] = 'Insert column after';
$lang['en_GB']['HtmlEditorField']['INSERTCOLBEF'] = 'Insert column before';
$lang['en_GB']['HtmlEditorField']['INSERTROWAFTER'] = 'Insert row after';
$lang['en_GB']['HtmlEditorField']['INSERTROWBEF'] = 'Insert row before';
$lang['en_GB']['HtmlEditorField']['INSERTTABLE'] = 'Insert table';
$lang['en_GB']['HtmlEditorField']['LINK'] = 'Link';
$lang['en_GB']['HtmlEditorField']['LINKANCHOR'] = 'Anchor on this page';
$lang['en_GB']['HtmlEditorField']['LINKDESCR'] = 'Link description';
$lang['en_GB']['HtmlEditorField']['LINKEMAIL'] = 'Email address';
$lang['en_GB']['HtmlEditorField']['LINKEXTERNAL'] = 'Another website';
$lang['en_GB']['HtmlEditorField']['LINKFILE'] = 'Download a file';
$lang['en_GB']['HtmlEditorField']['LINKINTERNAL'] = 'Page on the site';
$lang['en_GB']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Open link in a new window?';
$lang['en_GB']['HtmlEditorField']['LINKTEXT'] = 'Link text';
$lang['en_GB']['HtmlEditorField']['LINKTO'] = 'Link to';
$lang['en_GB']['HtmlEditorField']['OK'] = 'Ok';
$lang['en_GB']['HtmlEditorField']['OL'] = 'Numbered list';
$lang['en_GB']['HtmlEditorField']['OUTDENT'] = 'Decrease outdent';
$lang['en_GB']['HtmlEditorField']['PAGE'] = 'Page';
$lang['en_GB']['HtmlEditorField']['PASTE'] = 'Paste (Ctrl+V)';
$lang['en_GB']['HtmlEditorField']['PASTETEXT'] = 'Paste plain text';
$lang['en_GB']['HtmlEditorField']['PASTEWORD'] = 'Paste from Word';
$lang['en_GB']['HtmlEditorField']['REDO'] = 'Redo (Ctrl+Y)';
$lang['en_GB']['HtmlEditorField']['SEARCHFILENAME'] = 'Search by file name';
$lang['en_GB']['HtmlEditorField']['SELECTALL'] = 'Select All (Ctrl+A)';
$lang['en_GB']['HtmlEditorField']['UNDO'] = 'Undo (Ctrl+Z)';
$lang['en_GB']['HtmlEditorField']['UNLINK'] = 'Remove link';
$lang['en_GB']['HtmlEditorField']['UPLOAD'] = 'Upload';
$lang['en_GB']['HtmlEditorField']['URL'] = 'URL';
$lang['en_GB']['HtmlEditorField']['VISUALAID'] = 'Show/hide guidelines';
$lang['en_GB']['Image']['PLURALNAME'] = 'Files';
$lang['en_GB']['Image']['SINGULARNAME'] = 'File';
$lang['en_GB']['ImageField']['NOTEADDIMAGES'] = 'You can add images once you have saved for the first time.';
$lang['en_GB']['ImageUplaoder']['ONEFROMFILESTORE'] = 'With one from the file store';
$lang['en_GB']['ImageUploader']['ATTACH'] = 'Attach %s';
$lang['en_GB']['ImageUploader']['DELETE'] = 'Delete %s';
$lang['en_GB']['ImageUploader']['FROMCOMPUTER'] = 'From your computer';
$lang['en_GB']['ImageUploader']['FROMFILESTORE'] = 'From the file store';
$lang['en_GB']['ImageUploader']['ONEFROMCOMPUTER'] = 'With one from your computer';
$lang['en_GB']['ImageUploader']['REALLYDELETE'] = 'Do you really want to remove this %s?';
$lang['en_GB']['ImageUploader']['REPLACE'] = 'Replace %s';
$lang['en_GB']['Image_iframe.ss']['TITLE'] = 'Image Uploading Iframe';
$lang['en_GB']['LoginAttempt']['Email'] = 'Email Address';
$lang['en_GB']['LoginAttempt']['IP'] = 'IP Address';
$lang['en_GB']['LoginAttempt']['PLURALNAME'] = 'Log-in Attempts';
$lang['en_GB']['LoginAttempt']['SINGULARNAME'] = 'Log-in Attempt';
$lang['en_GB']['LoginAttempt']['Status'] = 'Status';
$lang['en_GB']['Member']['ADDRESS'] = 'Address';
$lang['en_GB']['Member']['belongs_many_many_Groups'] = 'Groups';
$lang['en_GB']['Member']['BUTTONCHANGEPASSWORD'] = 'Change Password';
$lang['en_GB']['Member']['BUTTONLOGIN'] = 'Log in';
$lang['en_GB']['Member']['BUTTONLOGINOTHER'] = 'Log in as someone else';
$lang['en_GB']['Member']['BUTTONLOSTPASSWORD'] = 'I\'ve lost my password';
$lang['en_GB']['Member']['CONFIRMNEWPASSWORD'] = 'Confirm New Password';
$lang['en_GB']['Member']['CONFIRMPASSWORD'] = 'Confirm Password';
$lang['en_GB']['Member']['CONTACTINFO'] = 'Contact Information';
$lang['en_GB']['Member']['db_LastVisited'] = 'Last Visited Date';
$lang['en_GB']['Member']['db_Locale'] = 'Interface Locale';
$lang['en_GB']['Member']['db_LockedOutUntil'] = 'Locked out until';
$lang['en_GB']['Member']['db_NumVisit'] = 'Number of Visits';
$lang['en_GB']['Member']['db_Password'] = 'Password';
$lang['en_GB']['Member']['db_PasswordExpiry'] = 'Password Expiry Date';
$lang['en_GB']['Member']['EMAIL'] = 'Email';
$lang['en_GB']['Member']['EMAILSIGNUPINTRO1'] = 'Thanks for signing up to become a new member, your details are listed below for future reference.';
$lang['en_GB']['Member']['EMAILSIGNUPINTRO2'] = 'You can log-in to the website using the credentials listed below';
$lang['en_GB']['Member']['EMAILSIGNUPSUBJECT'] = 'Thanks for signing up';
$lang['en_GB']['Member']['ENTEREMAIL'] = 'Please enter an email address to get a password reset link.';
$lang['en_GB']['Member']['ERRORLOCKEDOUT'] = 'Your account has been temporarily disabled because of too many failed attempts at logging in. Please try again in 20 minutes.';
$lang['en_GB']['Member']['ERRORNEWPASSWORD'] = 'Your have entered your new password differently, try again';
$lang['en_GB']['Member']['ERRORPASSWORDNOTMATCH'] = 'Your current password does not match, please try again';
$lang['en_GB']['Member']['ERRORWRONGCRED'] = 'That doesn\'t seem to be the right e-mail address or password. Please try again.';
$lang['en_GB']['Member']['FIRSTNAME'] = 'First Name';
$lang['en_GB']['Member']['GREETING'] = 'Welcome';
$lang['en_GB']['Member']['INTERFACELANG'] = 'Interface Language';
$lang['en_GB']['Member']['LOGGEDINAS'] = 'You\'re logged in as %s.';
$lang['en_GB']['Member']['MOBILE'] = 'Mobile';
$lang['en_GB']['Member']['NAME'] = 'Name';
$lang['en_GB']['Member']['NEWPASSWORD'] = 'New Password';
$lang['en_GB']['Member']['PASSWORD'] = 'Password';
$lang['en_GB']['Member']['PASSWORDCHANGED'] = 'Your password has been changed, and a copy emailed to you.';
$lang['en_GB']['Member']['PERSONALDETAILS'] = 'Personal Details';
$lang['en_GB']['Member']['PHONE'] = 'Phone';
$lang['en_GB']['Member']['PLURALNAME'] = 'Members';
$lang['en_GB']['Member']['PROFILESAVESUCCESS'] = 'Successfully saved.';
$lang['en_GB']['Member']['REMEMBERME'] = 'Remember me next time?';
$lang['en_GB']['Member']['SECURITYGROUPS'] = 'Security groups';
$lang['en_GB']['Member']['SINGULARNAME'] = 'Member';
$lang['en_GB']['Member']['SUBJECTPASSWORDCHANGED'] = 'Your password has been changed';
$lang['en_GB']['Member']['SUBJECTPASSWORDRESET'] = 'Your password reset link';
$lang['en_GB']['Member']['SURNAME'] = 'Surname';
$lang['en_GB']['Member']['USERDETAILS'] = 'User Details';
$lang['en_GB']['Member']['VALIDATIONMEMBEREXISTS'] = 'A member already exists with the same %s';
$lang['en_GB']['Member']['WELCOMEBACK'] = 'Welcome Back, %s';
$lang['en_GB']['Member']['YOUROLDPASSWORD'] = 'Your old password';
$lang['en_GB']['MemberAuthenticator']['TITLE'] = 'E-mail &amp; Password';
$lang['en_GB']['MemberPassword']['PLURALNAME'] = 'Member Passwords';
$lang['en_GB']['MemberPassword']['SINGULARNAME'] = 'Member Password';
$lang['en_GB']['MyEntity']['MyNamespace'] = 'My default natural language value';
$lang['en_GB']['MyNamespace']['MYENTITY'] = 'Counting %s things';
$lang['en_GB']['NumericField']['VALIDATION'] = '\'%s\' is not a number, only numbers can be accepted for this field';
$lang['en_GB']['NumericField']['VALIDATIONJS'] = 'is not a number, only numbers can be accepted for this field';
$lang['en_GB']['Page']['PLURALNAME'] = 'Pages';
$lang['en_GB']['Page']['SINGULARNAME'] = 'Page';
$lang['en_GB']['Permission']['FULLADMINRIGHTS'] = 'Full administrative rights';
$lang['en_GB']['Permission']['PERMSDEFINED'] = 'The following permission codes are defined';
$lang['en_GB']['Permission']['PLURALNAME'] = 'Permissions';
$lang['en_GB']['Permission']['SINGULARNAME'] = 'Permission';
$lang['en_GB']['PhoneNumberField']['VALIDATION'] = 'Please enter a valid phone number';
$lang['en_GB']['QueuedEmail']['PLURALNAME'] = 'Queued Emails';
$lang['en_GB']['QueuedEmail']['SINGULARNAME'] = 'Queued Email';
$lang['en_GB']['RedirectorPage']['HASBEENSETUP'] = 'A redirector page has been set up without anywhere to redirect to.';
$lang['en_GB']['RedirectorPage']['HEADER'] = 'This page will redirect users to another page';
$lang['en_GB']['RedirectorPage']['OTHERURL'] = 'Other website URL';
$lang['en_GB']['RedirectorPage']['PLURALNAME'] = 'Redirector Pages';
$lang['en_GB']['RedirectorPage']['REDIRECTTO'] = 'Redirect to';
$lang['en_GB']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Another website';
$lang['en_GB']['RedirectorPage']['REDIRECTTOPAGE'] = 'A page on your website';
$lang['en_GB']['RedirectorPage']['SINGULARNAME'] = 'Redirector Page';
$lang['en_GB']['RedirectorPage']['YOURPAGE'] = 'Page on your website';
$lang['en_GB']['RelationComplexTableField.ss']['ADD'] = 'Add';
$lang['en_GB']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Export to CSV';
$lang['en_GB']['RelationComplexTableField.ss']['DELETE'] = 'delete';
$lang['en_GB']['RelationComplexTableField.ss']['EDIT'] = 'edit';
$lang['en_GB']['RelationComplexTableField.ss']['NOTFOUND'] = 'No items found';
$lang['en_GB']['RelationComplexTableField.ss']['SHOW'] = 'show';
$lang['en_GB']['SearchForm']['GO'] = 'Go';
$lang['en_GB']['SearchForm']['SEARCH'] = 'Search';
$lang['en_GB']['Security']['ALREADYLOGGEDIN'] = 'You don\'t have access to this page. If you have another account that can access that page, you can <a href="%s">log in again</a>.';
$lang['en_GB']['Security']['BUTTONSEND'] = 'Send me the password reset link';
$lang['en_GB']['Security']['CHANGEPASSWORDBELOW'] = 'You can change your password below.';
$lang['en_GB']['Security']['CHANGEPASSWORDHEADER'] = 'Change your password';
$lang['en_GB']['Security']['EMAIL'] = 'E-Mail:';
$lang['en_GB']['Security']['ENCDISABLED1'] = 'Password encryption disabled!';
$lang['en_GB']['Security']['ENCDISABLED2'] = 'To encrypt your passwords change your password settings by adding';
$lang['en_GB']['Security']['ENCDISABLED3'] = 'to mysite/_config.php';
$lang['en_GB']['Security']['ENCRYPT'] = 'Encrypting all passwords';
$lang['en_GB']['Security']['ENCRYPTEDMEMBERS'] = 'Encrypted credentials for member &quot;';
$lang['en_GB']['Security']['ENCRYPTWITH'] = 'The passwords will be encrypted using the &quot;%s&quot; algorithm';
$lang['en_GB']['Security']['ENCRYPTWITHOUTSALT'] = 'without using a salt to increase the security.';
$lang['en_GB']['Security']['ENCRYPTWITHSALT'] = 'with a salt to increase the security.';
$lang['en_GB']['Security']['ENTERNEWPASSWORD'] = 'Please enter a new password.';
$lang['en_GB']['Security']['ERRORPASSWORDPERMISSION'] = 'You must be logged in in order to change your password!';
$lang['en_GB']['Security']['ID'] = 'ID:';
$lang['en_GB']['Security']['IPADDRESSES'] = 'IP Addresses';
$lang['en_GB']['Security']['LOGGEDOUT'] = 'You have been logged out. If you would like to log in again, enter your credentials below.';
$lang['en_GB']['Security']['LOGIN'] = 'Log in';
$lang['en_GB']['Security']['LOSTPASSWORDHEADER'] = 'Lost Password';
$lang['en_GB']['Security']['NOTEPAGESECURED'] = 'That page is secured. Enter your credentials below and we will send you right along.';
$lang['en_GB']['Security']['NOTERESETLINKINVALID'] = '<p>The password reset link is invalid or expired.</p><p>You can request a new one <a href="%s">here</a> or change your password after you <a href="%s">logged in</a>.</p>';
$lang['en_GB']['Security']['NOTERESETPASSWORD'] = 'Enter your e-mail address and we will send you a link with which you can reset your password';
$lang['en_GB']['Security']['NOTHINGTOENCRYPT1'] = 'No passwords to encrypt';
$lang['en_GB']['Security']['NOTHINGTOENCRYPT2'] = 'There are no members with a clear text password that could be encrypted!';
$lang['en_GB']['Security']['PASSWORDSENTHEADER'] = 'Password reset link sent to \'%s\'';
$lang['en_GB']['Security']['PASSWORDSENTTEXT'] = 'Thank you! A reset link has been sent to \'%s\', provided an account exists for this email address.';
$lang['en_GB']['Security']['PERMFAILURE'] = ' This page is secured and you need administrator rights to access it.
Enter your credentials below and we will send you right along.';
$lang['en_GB']['SecurityAdmin']['ADVANCEDONLY'] = 'This section is for advanced users only.
See <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">this page</a>
for more information.';
$lang['en_GB']['SecurityAdmin']['CODE'] = 'Code';
$lang['en_GB']['SecurityAdmin']['GROUPNAME'] = 'Group name';
$lang['en_GB']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>You can restrict this group to a particular
IP address range (one range per line). <br />Ranges can be in any of the following forms: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />If you enter one or more IP address ranges in this box, then members will only get
the rights of being in this group if they log on from one of the valid IP addresses. It won\'t prevent
people from logging in. This is because the same user might have to log in to access parts of the
system without IP address restrictions.';
$lang['en_GB']['SecurityAdmin']['MEMBERS'] = 'Members';
$lang['en_GB']['SecurityAdmin']['OPTIONALID'] = 'Optional ID';
$lang['en_GB']['SecurityAdmin']['PERMISSIONS'] = 'Permissions';
$lang['en_GB']['SecurityAdmin']['VIEWUSER'] = 'View User';
$lang['en_GB']['SimpleImageField']['NOUPLOAD'] = 'No Image Uploaded';
$lang['en_GB']['SiteTree']['ACCESSANYONE'] = 'Anyone';
$lang['en_GB']['SiteTree']['ACCESSHEADER'] = 'Who can view this page?';
$lang['en_GB']['SiteTree']['ACCESSLOGGEDIN'] = 'Logged-in users';
$lang['en_GB']['SiteTree']['ACCESSONLYTHESE'] = 'Only these people (choose from list)';
$lang['en_GB']['SiteTree']['ADDEDTODRAFT'] = 'Added to draft site';
$lang['en_GB']['SiteTree']['ALLOWCOMMENTS'] = 'Allow comments on this page?';
$lang['en_GB']['SiteTree']['APPEARSVIRTUALPAGES'] = 'This content also appears on the virtual pages in the %s sections.';
$lang['en_GB']['SiteTree']['BUTTONCANCELDRAFT'] = 'Cancel draft changes';
$lang['en_GB']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Delete your draft and revert to the currently published page';
$lang['en_GB']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Save and Publish';
$lang['en_GB']['SiteTree']['BUTTONUNPUBLISH'] = 'Unpublish';
$lang['en_GB']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Remove this page from the published site';
$lang['en_GB']['SiteTree']['CHANGETO'] = 'Change to "%s"';
$lang['en_GB']['SiteTree']['Comments'] = 'Comments';
$lang['en_GB']['SiteTree']['Content'] = 'Content';
$lang['en_GB']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>You can fill this page out with your own content, or delete it and create your own pages.<br /></p>';
$lang['en_GB']['SiteTree']['DEFAULTABOUTTITLE'] = 'About Us';
$lang['en_GB']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>You can fill this page out with your own content, or delete it and create your own pages.<br /></p>';
$lang['en_GB']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Contact Us';
$lang['en_GB']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Welcome to SilverStripe! This is the default home page. You can edit this page by opening <a href="admin/">the CMS</a>. You can now access the <a href="http://doc.silverstripe.org">developer documentation</a>, or begin <a href="http://doc.silverstripe.org/doku.php?id=tutorials">the tutorials.</a></p>';
$lang['en_GB']['SiteTree']['DEFAULTHOMETITLE'] = 'Home';
$lang['en_GB']['SiteTree']['EDITANYONE'] = 'Anyone who can log-in to the CMS';
$lang['en_GB']['SiteTree']['EDITHEADER'] = 'Who can edit this page?';
$lang['en_GB']['SiteTree']['EDITONLYTHESE'] = 'Only these people (choose from list)';
$lang['en_GB']['SiteTree']['Editors'] = 'Editors Groups';
$lang['en_GB']['SiteTree']['GROUP'] = 'Group';
$lang['en_GB']['SiteTree']['HASBROKENLINKS'] = 'This page has broken links.';
$lang['en_GB']['SiteTree']['has_one_Parent'] = 'Parent Page';
$lang['en_GB']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domain(s)';
$lang['en_GB']['SiteTree']['HomepageForDomain'] = 'Homepage for this domain';
$lang['en_GB']['SiteTree']['HTMLEDITORTITLE'] = 'Content';
$lang['en_GB']['SiteTree']['INHERIT'] = 'Inherit from parent page';
$lang['en_GB']['SiteTree']['many_many_BackLinkTracking'] = 'Backlink Tracking';
$lang['en_GB']['SiteTree']['many_many_ImageTracking'] = 'Image Tracking';
$lang['en_GB']['SiteTree']['many_many_LinkTracking'] = 'Link Tracking';
$lang['en_GB']['SiteTree']['MENUTITLE'] = 'Navigation label';
$lang['en_GB']['SiteTree']['METADESC'] = 'Description';
$lang['en_GB']['SiteTree']['METAEXTRA'] = 'Custom Meta Tags';
$lang['en_GB']['SiteTree']['METAHEADER'] = 'Search Engine Meta-tags';
$lang['en_GB']['SiteTree']['METAKEYWORDS'] = 'Keywords';
$lang['en_GB']['SiteTree']['METATITLE'] = 'Title';
$lang['en_GB']['SiteTree']['MODIFIEDONDRAFT'] = 'Modified on draft site';
$lang['en_GB']['SiteTree']['NOBACKLINKS'] = 'This page hasn\'t been linked to from any pages.';
$lang['en_GB']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Use this page as the \'home page\' for the following domains:
(separate multiple domains with commas)';
$lang['en_GB']['SiteTree']['PAGESLINKING'] = 'The following pages link to this page:';
$lang['en_GB']['SiteTree']['PAGETITLE'] = 'Page name';
$lang['en_GB']['SiteTree']['PAGETYPE'] = 'Page type';
$lang['en_GB']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'Manage access rights for content';
$lang['en_GB']['SiteTree']['PLURALNAME'] = 'Site Trees';
$lang['en_GB']['SiteTree']['REMOVEDFROMDRAFT'] = 'Removed from draft site';
$lang['en_GB']['SiteTree']['SHOWINMENUS'] = 'Show in menus?';
$lang['en_GB']['SiteTree']['SHOWINSEARCH'] = 'Show in search?';
$lang['en_GB']['SiteTree']['SINGULARNAME'] = 'Site Tree';
$lang['en_GB']['SiteTree']['TABACCESS'] = 'Access';
$lang['en_GB']['SiteTree']['TABBACKLINKS'] = 'BackLinks';
$lang['en_GB']['SiteTree']['TABBEHAVIOUR'] = 'Behaviour';
$lang['en_GB']['SiteTree']['TABCONTENT'] = 'Content';
$lang['en_GB']['SiteTree']['TABMAIN'] = 'Main';
$lang['en_GB']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['en_GB']['SiteTree']['TABREPORTS'] = 'Reports';
$lang['en_GB']['SiteTree']['ToDo'] = 'To do Notes';
$lang['en_GB']['SiteTree']['TODOHELP'] = '<p>You can use this to keep track of work that needs to be done to the content of your site. To see all your pages with to do information, open the \'Site Reports\' window on the left and select \'To Do\'</p>';
$lang['en_GB']['SiteTree']['TOPLEVEL'] = 'Site Content (Top Level)';
$lang['en_GB']['SiteTree']['URL'] = 'URL';
$lang['en_GB']['SiteTree']['URLSegment'] = 'URL Segment';
$lang['en_GB']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Another page is using that URL. URL must be unique for each page';
$lang['en_GB']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URLs can only be made up of letters, digits and hyphens.';
$lang['en_GB']['SiteTree']['Viewers'] = 'Viewers Groups';
$lang['en_GB']['TableField']['ISREQUIRED'] = 'In %s \'%s\' is required.';
$lang['en_GB']['TableField.ss']['ADD'] = 'Add a new row';
$lang['en_GB']['TableField.ss']['CSVEXPORT'] = 'Export to CSV';
$lang['en_GB']['TableListField']['CSVEXPORT'] = 'Export to CSV';
$lang['en_GB']['TableListField']['PRINT'] = 'Print';
$lang['en_GB']['TableListField_PageControls.ss']['DISPLAYING'] = 'Displaying';
$lang['en_GB']['TableListField_PageControls.ss']['OF'] = 'of';
$lang['en_GB']['TableListField_PageControls.ss']['TO'] = 'to';
$lang['en_GB']['TableListField_PageControls.ss']['VIEWFIRST'] = 'View first';
$lang['en_GB']['TableListField_PageControls.ss']['VIEWLAST'] = 'View last';
$lang['en_GB']['TableListField_PageControls.ss']['VIEWNEXT'] = 'View next';
$lang['en_GB']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'View previous';
$lang['en_GB']['ToggleCompositeField.ss']['HIDE'] = 'Hide';
$lang['en_GB']['ToggleCompositeField.ss']['SHOW'] = 'Show';
$lang['en_GB']['ToggleField']['LESS'] = 'less';
$lang['en_GB']['ToggleField']['MORE'] = 'more';
$lang['en_GB']['Translatable']['CREATE'] = 'Create new translation';
$lang['en_GB']['Translatable']['CREATEBUTTON'] = 'Create';
$lang['en_GB']['Translatable']['EXISTING'] = 'Existing translations:';
$lang['en_GB']['Translatable']['NEWLANGUAGE'] = 'New language';
$lang['en_GB']['Translatable']['TRANSLATIONS'] = 'Translations';
$lang['en_GB']['TreeSelectorField']['CANCEL'] = 'cancel';
$lang['en_GB']['TreeSelectorField']['SAVE'] = 'save';
$lang['en_GB']['TypeDropdown']['NONE'] = 'None';
$lang['en_GB']['Versioned']['has_many_Versions'] = 'Versions';
$lang['en_GB']['VirtualPage']['CHOOSE'] = 'Choose a page to link to';
$lang['en_GB']['VirtualPage']['EDITCONTENT'] = 'click here to edit the content';
$lang['en_GB']['VirtualPage']['HEADER'] = 'This is a virtual page';
$lang['en_GB']['VirtualPage']['PLURALNAME'] = 'Virtual Pages';
$lang['en_GB']['VirtualPage']['SINGULARNAME'] = 'Virtual Page';
$lang['en_GB']['Widget']['PLURALNAME'] = 'Widgets';
$lang['en_GB']['Widget']['SINGULARNAME'] = 'Widget';
$lang['en_GB']['WidgetArea']['PLURALNAME'] = 'Widget Areas';
$lang['en_GB']['WidgetArea']['SINGULARNAME'] = 'Widget Area';