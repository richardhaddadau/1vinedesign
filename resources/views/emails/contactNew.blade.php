<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--[if !mso]><!-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <style type="text/css">
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
table { border-spacing: 0; table-layout: auto; margin: 0 auto; }
.yshortcuts a { border-bottom: none !important; }
img:hover { opacity: 0.9 !important; }
a { color: #7db241; text-decoration: none; }
.textbutton a { font-family: 'open sans', arial, sans-serif !important; }
.btn-link a { color: #FFFFFF !important; }

@media only screen and (max-width: 479px) {
body { width: auto !important; font-family: 'Open Sans', Arial, Sans-serif !important;}
.table-inner{ width: 90% !important; text-align: center !important;}
.table-full { width: 100%!important; max-width: 100%!important; text-align: center !important;}
/*gmail*/
u + .body .full { width:100% !important; width:100vw !important;}
}
</style>
</head>

<body class="body">
  <table class="full" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td background="{{ asset('img/email/bg.jpg') }}" bgcolor="#494c50" valign="top" style="background-size: cover; background-position: center;">
        <table align="center" width="600" class="table-inner" style="max-width: 600px;" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50"></td>
          </tr>
          <!-- logo -->
          <tr>
            <td align="center" style="line-height: 0px;">
              <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{ asset('img/email/logo.png') }}" alt="logo" />
            </td>
          </tr>
          <!-- end logo -->
          <tr>
            <td height="20"></td>
          </tr>
          <!-- slogan -->
          <tr>
            <td align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:11px; color:#FFFFFF;text-transform:uppercase; letter-spacing:4px;">...for the love of design.</td>
          </tr>
          <!-- end slogan -->
          <tr>
            <td height="40"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" style="border-top-left-radius:4px; border-top-right-radius:4px;" align="center">
              <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="50"></td>
                </tr>
                <!-- title -->
                <tr>
                  <td align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:36px; color:#3b3b3b; font-weight: bold; letter-spacing:4px;">You have a new contact!</td>
                </tr>
                <!-- end title -->
                <!-- dash -->
                <tr>
                  <td align="center">
                    <table width="25" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="20" style="border-bottom:2px solid #7db241;"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- end dash -->
                <tr>
                  <td height="20"></td>
                </tr>
                <!-- content -->
                <tr>
                  <td align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#7f8c8d; line-height:30px;">
                    <p>Name</p>
                    <p><strong>{{ $newContact->name }}</strong></p>
                    <p>Email</p>
                    <p><strong>{{ $newContact->email }}</strong></p>
                    <p>Message</p>
                    <p><strong>{{ $newContact->project }}</strong></p>
                    <p>ReCaptcha Score</p>
                    <p><strong>{{ $newContact->score }}</strong></p>
                  </td>
                </tr>
                <tr>
                  <td height="45"></td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- point -->
          <tr>
            <td height="22" align="center" style="line-height:0px;">
              <img src="{{ asset('img/email/point.png') }}" alt="img" width="42" height="22" style="display:block; line-height:0px; font-size:0px; border:0px;" />
            </td>
          </tr>
          <!-- profile -->
          <tr>
            <td height="100" align="center" style="line-height:0px;">
              <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{ asset('img/email/profile.png') }}" alt="img" />
            </td>
          </tr>
          <!-- end profile -->
          <tr>
            <td height="30"></td>
          </tr>
          <!-- social -->
          <tr>
            <td align="center">
              <table align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" style="line-height:0xp;">
                    <a href="https://facebook.com/1vinedesign" target="_blank"> <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{ asset('img/email/fb.png') }}" alt="img" /> </a>
                  </td>
                  <td width="20"></td>
                  <td align="center" style="line-height:0xp;">
                    <a href="https://instagram.com/1vinedesign" target="_blank"> <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{ asset('img/email/ig.png') }}" alt="img" /> </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- end social -->
          <tr>
            <td height="15"></td>
          </tr>
          <!-- copyright -->
          <tr>
            <td align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#FFFFFF;">© 2020 1VINE Design. All Rights Reserved.</td>
          </tr>
          <!-- end copyright -->
          <tr>
            <td height="30"></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>
