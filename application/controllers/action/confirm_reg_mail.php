<?php

$logo = base_url('img/logo/logo.png');
$mailBody ='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body bgcolor="#FFFFFF">

<table border="0" cellpadding="10" cellspacing="0" style=
"background-color: #FFFFFF" width="100%">
    <tr>
        <td>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->

            <table align="center" border="0" cellpadding="0" cellspacing="0" class=
            "content" style="background-color: #FFFFFF">
                <tr>
                    <td id="templateContainerHeader" valign="top" mc:edit="welcomeEdit-01">
                        <p style="text-align:center;margin:0;padding:0;"><img src="'.$logo.'" width="35" style="display:inline-block;"> <b style="font-size: 26px;">Havana<span style="color: #f00">Plux</span></b></p>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" class=
                        "brdBottomPadd-two" id="templateContainer" width="100%">
                            <tr>
                                <td class="bodyContent" valign="top" mc:edit="welcomeEdit-02">
                                    <p>Hi '.$firstName.',</p>

                                    <h1><strong>Congratulations on signing up<br>
                                            for HavanaPlux!</strong></h1>

                                    <h3>Thanks for joining our free community for marketers.
                                        We are excited to share everything that we know about
                                        Blockchain, Exchange, Trading, ICO Airdrop and etc. </h3>
                                </td>
                            </tr>

                            <tr align="top">
                                <td class="bodyContentImage" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td align="left" style="margin:0;padding:0;" valign=
                                            "top" width="50" mc:edit="welcomeEdit-03">
                                                <p style="margin-bottom:10px"><img src="http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/img_profile.jpg" style="display:block;"></p>
                                            </td>

                                            <td align="left" style="width:15px;margin:0;padding:0;"
                                                valign="top" width="15">&nbsp;</td>

                                            <td align="left" style=
                                            "margin:0;padding-top:10px;line-height:1;" valign=
                                                "top" mc:edit="welcomeEdit-04">
                                                <h4><strong>Jeniffer Smith</strong></h4>

                                                <h5>Community Manager at Havanaplux</h5>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td align="center">

                        <table border="0" cellpadding="0" cellspacing="0" class="brdBottomPadd-two " id="templateContainerMiddle" width="100%">
                            <tr valign="top">
                                <td align="center" class="bodyContentTicks">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">

                                        <tr valign="top">
                                            <td valign="top" mc:edit="welcomeEditImgFirst" style="width:19%;color:#505050;font-family:Helvetica;font-size:14px;padding-bottom:1.143em;">
                                                <p style=
                                                   "text-align:center;margin:0 0 15px 0;padding:0;">
                                                    <img height="" src=
                                                    "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/circle.jpg"
                                                         style="display:block;" width="91"></p>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>

                                            <td valign="top" mc:edit="welcomeEditTxtFirst" style="width:71%;color:#505050;font-family:Helvetica;font-size:14px;padding-top:0.714em;">
                                                <h3><strong>Activate your Account</strong></h3>
                                                <h4>Activate your Havanaplux account by clicking on the below email confirmation link or copy the link to your url bar if clicking is not permitted
                                                    <br> <a class="btn blue-btn" href=" '. base_url().'authentication/confirmmail/'.$mailConfirm.'">Click here to confirm</a>
                                                    <br>
                                                    or copy the link
                                                    <div class="">
                                                        '.  base_url().'authentication/confirmmail/'.$mailConfirm.'
                                                    </div>
                                                </h4>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>
                                        </tr>

                                        <tr valign="top">
                                            <td valign="top" mc:edit="welcomeEditImgFirst" style="width:19%;color:#505050;font-family:Helvetica;font-size:14px;padding-bottom:1.143em;">
                                                <p style=
                                                   "text-align:center;margin:0 0 15px 0;padding:0;">
                                                    <img height="" src=
                                                    "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/circle.jpg"
                                                         style="display:block;" width="91"></p>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>

                                            <td valign="top" mc:edit="welcomeEditTxtFirst" style="width:71%;color:#505050;font-family:Helvetica;font-size:14px;padding-top:0.714em;">
                                                <h3><strong>Publish your first writeup</strong></h3>
                                                <h4>Take part in our free community and earn reward by sharing your ideas.</h4>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>
                                        </tr>

                                        <tr valign="top">
                                            <td valign="top" mc:edit="welcomeEditImgFirst" style="width:19%;color:#505050;font-family:Helvetica;font-size:14px;padding-bottom:1.143em;">
                                                <p style=
                                                   "text-align:center;margin:0 0 15px 0;padding:0;">
                                                    <img height="" src=
                                                    "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/circle.jpg"
                                                         style="display:block;" width="91"></p>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>

                                            <td valign="top" mc:edit="welcomeEditTxtFirst">
                                                <h3><strong>Invite your friends</strong></h3>
                                                <h4>Our community is only as good as its members. Share Havanaplux with your friends.</h4>
                                            </td>

                                            <td valign="top" style="width:5%;">&nbsp;</td>
                                        </tr>

                                    </table>
                                </td>

                            </tr>
                        </table>

                    </td>
                </tr>
            </table><!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>

<style type="text/css">

    span.preheader {
        display:none!important
    }
    td ul li {
        font-size: 16px;
    }


    #outlook a {
        padding:0
    }


    .ReadMsgBody {
        width:100%
    }

    .ExternalClass {
        width:100%
    }


    .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {
        line-height:100%
    }


    body,table,td,p,a,li,blockquote {
        -webkit-text-size-adjust:100%;
        -ms-text-size-adjust:100%
    }


    table,td {
        mso-table-lspace:0;
        mso-table-rspace:0
    }


    body {
        margin:0;
        padding:0
    }

    img {
        max-width:100%;
        border:0;
        line-height:100%;
        outline:none;
        text-decoration:none
    }

    table {
        border-collapse:collapse!important
    }

    .content {
        width:100%;
        max-width:600px
    }

    .content img {
        height:auto;
        min-height:1px
    }

    #bodyTable {
        margin:0;
        padding:0;
        width:100%!important
    }

    #bodyCell {
        margin:0;
        padding:0
    }

    #bodyCellFooter {
        margin:0;
        padding:0;
        width:100%!important;
        padding-top:39px;
        padding-bottom:15px
    }

    body {
        margin:0;
        padding:0;
        min-width:100%!important
    }

    #templateContainerHeader {
        font-size:14px;
        padding-top:2.429em;
        padding-bottom:.929em
    }

    #templateContainerFootBrd {
        border-bottom:1px solid #e2e2e2;
        border-left:1px solid #e2e2e2;
        border-right:1px solid #e2e2e2;
        border-radius:0 0 4px 4px;
        background-clip:padding-box;
        border-spacing:0;
        height:10px;
        width:100%!important
    }

    #templateContainer {
        border-top:1px solid #e2e2e2;
        border-left:1px solid #e2e2e2;
        border-right:1px solid #e2e2e2;
        border-radius:4px 4px 0 0;
        background-clip:padding-box;
        border-spacing:0
    }

    #templateContainerMiddle {
        border-left:1px solid #e2e2e2;
        border-right:1px solid #e2e2e2
    }

    #templateContainerMiddleBtm {
        border-left:1px solid #e2e2e2;
        border-right:1px solid #e2e2e2;
        border-bottom:1px solid #e2e2e2;
        border-radius:0 0 4px 4px;
        background-clip:padding-box;
        border-spacing:0
    }

    #templateContainerMiddleBtm .bodyContent {
        padding-bottom:2em
    }


    h1 {
        color:#2e2e2e;
        display:block;
        font-family:Helvetica;
        font-size:26px;
        line-height:1.385em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }


    h2 {
        color:#2e2e2e;
        display:block;
        font-family:Helvetica;
        font-size:22px;
        line-height:1.455em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }

    h3 {
        color:#545454;
        display:block;
        font-family:Helvetica;
        font-size:18px;
        line-height:1.444em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }


    h4 {
        color:#545454;
        display:block;
        font-family:Helvetica;
        font-size:14px;
        line-height:1.571em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }

    h5 {
        color:#545454;
        display:block;
        font-family:Helvetica;
        font-size:13px;
        line-height:1.538em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }

    h6 {
        color:#545454;
        display:block;
        font-family:Helvetica;
        font-size:12px;
        line-height:2em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }

    p {
        color:#545454;
        display:block;
        font-family:Helvetica;
        font-size:16px;
        line-height:1.5em;
        font-style:normal;
        font-weight:400;
        letter-spacing:normal;
        margin-top:0;
        margin-right:0;
        margin-bottom:15px;
        margin-left:0;
        text-align:left
    }

    .unSubContent a:visited {
        color:#a1a1a1;
        text-decoration:underline;
        font-weight:400
    }

    .unSubContent a:focus {
        color:#a1a1a1;
        text-decoration:underline;
        font-weight:400
    }

    .unSubContent a:hover {
        color:#a1a1a1;
        text-decoration:underline;
        font-weight:400
    }

    .unSubContent a:link {
        color:#a1a1a1;
        text-decoration:underline;
        font-weight:400
    }

    .unSubContent a .yshortcuts {
        color:#a1a1a1;
        text-decoration:underline;
        font-weight:400
    }

    .unSubContent h6 {
        color:#a1a1a1;
        font-size:12px;
        line-height:1.5em;
        margin-bottom:0
    }

    .bodyContent {
        color:#505050;
        font-family:Helvetica;
        font-size:14px;
        line-height:150%;
        padding-top:3.143em;
        padding-right:3.5em;
        padding-left:3.5em;
        padding-bottom:.714em;
        text-align:left
    }

    .bodyContentImage {
        color:#505050;
        font-family:Helvetica;
        font-size:14px;
        line-height:150%;
        padding-top:0;
        padding-right:3.571em;
        padding-left:3.571em;
        padding-bottom:1.357em;
        text-align:left
    }

    .bodyContentImage h4 {
        color:#4E4E4E;
        font-size:13px;
        line-height:1.154em;
        font-weight:400;
        margin-bottom:0
    }

    .bodyContentImage h5 {
        color:#828282;
        font-size:12px;
        line-height:1.667em;
        margin-bottom:0
    }


    a:visited {
        color:#3386e4;
        text-decoration:none;
    }

    a:focus {
        color:#3386e4;
        text-decoration:none;
    }

    a:hover {
        color:#3386e4;
        text-decoration:none;
    }

    a:link {
        color:#3386e4;
        text-decoration:none;
    }

    a .yshortcuts {
        color:#3386e4;
        text-decoration:none;
    }

    .bodyContent img {
        height:auto;
        max-width:498px
    }

    .footerContent {
        color:gray;
        font-family:Helvetica;
        font-size:10px;
        line-height:150%;
        padding-top:2em;
        padding-right:2em;
        padding-bottom:2em;
        padding-left:2em;
        text-align:left
    }


    .footerContent a:link,.footerContent a:visited,/* Yahoo! Mail Override */ .footerContent a .yshortcuts,.footerContent a span /* Yahoo! Mail Override */ {
        color:#606060;
        font-weight:400;
        text-decoration:underline
    }


    .bodyContentImageFull p {
        font-size:0!important;
        margin-bottom:0!important
    }

    .brdBottomPadd {
        border-bottom:1px solid #f0f0f0
    }

    .brdBottomPadd-two {
        border-bottom:1px solid #f0f0f0
    }

    .brdBottomPadd .bodyContent {
        padding-bottom:2.286em
    }

    .brdBottomPadd-two .bodyContent {
        padding-bottom:.857em
    }

    a.blue-btn {
        background: #5098ea;
        display: inline-block;
        color: #FFFFFF;
        border-top:10px solid #5098ea;
        border-bottom:10px solid #5098ea;
        border-left:20px solid #5098ea;
        border-right:20px solid #5098ea;
        text-decoration: none;
        font-size: 14px;
        margin-top: 1.0em;
        border-radius: 3px 3px 3px 3px;
        background-clip: padding-box;
    }

    .bodyContentTicks {
        color:#505050;
        font-family:Helvetica;
        font-size:14px;
        line-height:150%;
        padding-top:2.857em;
        padding-right:3.5em;
        padding-left:3.5em;
        padding-bottom:1.786em;
        text-align:left
    }

    .splitTicks {
        width:100%
    }

    .splitTicks--one {
        width:19%;
        color:#505050;
        font-family:Helvetica;
        font-size:14px;
        padding-bottom:1.143em
    }

    .splitTicks--two {
        width:5%
    }

    .splitTicks--three {
        width:71%;
        color:#505050;
        font-family:Helvetica;
        font-size:14px;
        padding-top:.714em
    }

    .splitTicks--three h3 {
        margin-bottom:.278em
    }

    .splitTicks--four {
        width:5%
    }

    @media only screen and (max-width: 550px),screen and (max-device-width: 550px) {
        body[yahoo] .hide {
            display:none!important
        }

        body[yahoo] .buttonwrapper {
            background-color:transparent!important
        }

        body[yahoo] .button {
            padding:0!important
        }

        body[yahoo] .button a {
            background-color:#e05443;
            padding:15px 15px 13px!important
        }

        body[yahoo] .unsubscribe {
            font-size:14px;
            display:block;
            margin-top:.714em;
            padding:10px 50px;
            background:#2f3942;
            border-radius:5px;
            text-decoration:none!important
        }
    }

    @media only screen and (max-width: 480px),screen and (max-device-width: 480px) {
        .bodyContentTicks {
            padding:6% 5% 5% 6%!important
        }

        .bodyContentTicks td {
            padding-top:0!important
        }

        h1 {
            font-size:34px!important
        }

        h2 {
            font-size:30px!important
        }

        h3 {
            font-size:24px!important
        }

        h4 {
            font-size:18px!important
        }

        h5 {
            font-size:16px!important
        }

        h6 {
            font-size:14px!important
        }

        p {
            font-size:18px!important
        }

        .brdBottomPadd .bodyContent {
            padding-bottom:2.286em!important
        }

        .brdBottomPadd-two .bodyContent {
            padding-bottom:.857em!important
        }

        #templateContainerMiddleBtm .bodyContent {
            padding:6% 5% 5% 6%!important
        }

        .bodyContent {
            padding:6% 5% 1% 6%!important
        }

        .bodyContent img {
            max-width:100%!important
        }

        .bodyContentImage {
            padding:3% 6% 6%!important
        }

        .bodyContentImage img {
            max-width:100%!important
        }

        .bodyContentImage h4 {
            font-size:16px!important
        }

        .bodyContentImage h5 {
            font-size:15px!important;
            margin-top:0
        }
    }
    .ii a[href] {color: inherit !important;}
    span > a, span > a[href] {color: inherit !important;}
    a > span, .ii a[href] > span {text-decoration: inherit !important;}
</style>

</body>
</html>'

?>
