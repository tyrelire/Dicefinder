<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/confirmation_email.html.twig */
class __TwigTemplate_b647136e3f40dd6d1f40b08c78d970a4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        yield "<!--
* Cet e-mail a été construit en utilisant Tabular.
* Pour plus d'informations, visitez https://tabular.email
-->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"fr\">

<head>
    <title>Confirmation de compte - DiceFinder</title>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!--[if !mso]>-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!--<![endif]-->
    <meta name=\"x-apple-disable-message-reformatting\" content=\"\" />
    <meta content=\"target-densitydpi=device-dpi\" name=\"viewport\" />
    <meta content=\"true\" name=\"HandheldFriendly\" />
    <meta content=\"width=device-width\" name=\"viewport\" />
    <meta name=\"format-detection\" content=\"telephone=no, date=no, address=no, email=no, url=no\" />
    <style type=\"text/css\">
        table {
            border-collapse: separate;
            table-layout: fixed;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt
        }

        table td {
            border-collapse: collapse
        }

        .ExternalClass {
            width: 100%
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%
        }

        .gmail-mobile-forced-width {
            display: none;
            display: none !important;
        }

        body,
        a,
        li,
        p,
        h1,
        h2,
        h3 {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        html {
            -webkit-text-size-adjust: none !important
        }

        body,
        #innerTable {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        #innerTable img+div {
            display: none;
            display: none !important
        }

        img {
            Margin: 0;
            padding: 0;
            -ms-interpolation-mode: bicubic
        }

        h1,
        h2,
        h3,
        p,
        a {
            line-height: inherit;
            overflow-wrap: normal;
            white-space: normal;
            word-break: break-word
        }

        a {
            text-decoration: none
        }

        h1,
        h2,
        h3,
        p {
            min-width: 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            display: inline-block !important;
            border: 0;
            padding: 0;
            margin: 0
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important
        }

        u+#body a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        a[href^=\"mailto\"],
        a[href^=\"tel\"],
        a[href^=\"sms\"] {
            color: inherit;
            text-decoration: none
        }
    </style>
    <style type=\"text/css\">
        @media (min-width: 481px) {
            .hd {
                display: none !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            .hm {
                display: none !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            .t18,
            .t21,
            .t5,
            .t9 {
                width: 400px !important
            }

            .t20,
            .t23 {
                mso-line-height-alt: 0px !important;
                line-height: 0 !important;
                display: none !important
            }

            .t21 {
                padding: 40px !important;
                border-radius: 0 !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            [class~=\"x_t20\"] {
                mso-line-height-alt: 0px !important;
                line-height: 0px !important;
                display: none !important;
            }

            [class~=\"x_t23\"] {
                mso-line-height-alt: 0px !important;
                line-height: 0px !important;
                display: none !important;
            }

            [class~=\"x_t21\"] {
                padding-left: 40px !important;
                padding-top: 40px !important;
                padding-bottom: 40px !important;
                padding-right: 40px !important;
                border-top-left-radius: 0px !important;
                border-top-right-radius: 0px !important;
                border-bottom-right-radius: 0px !important;
                border-bottom-left-radius: 0px !important;
                width: 400px !important;
            }

            [class~=\"x_t5\"] {
                width: 400px !important;
            }

            [class~=\"x_t9\"] {
                width: 400px !important;
            }

            [class~=\"x_t18\"] {
                width: 400px !important;
            }
        }
    </style>
    <!--[if !mso]>-->
    <link href=\"https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;700;800&amp;family=Inter+Tight:wght@900&amp;display=swap\" rel=\"stylesheet\" type=\"text/css\" />
    <!--<![endif]-->
    <!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
</head>

<body id=\"body\" class=\"t26\" style=\"min-width:100%;Margin:0px;padding:0px;background-color:#F4F4F4;\">
    <div class=\"t25\" style=\"background-color:#F4F4F4;\">
        <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
            <tr>
                <td class=\"t24\" style=\"font-size:0;line-height:0;mso-line-height-rule:exactly;background-color:#F4F4F4;\" valign=\"top\" align=\"center\">
                    <!--[if mso]>
                    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\">
                    <v:fill color=\"#F4F4F4\"/>
                    </v:background>
                    <![endif]-->
                    <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" id=\"innerTable\">
                        <tr>
                            <td>
                                <div class=\"t20\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:60px;line-height:60px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\">
                                <table class=\"t22\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                    <tr>
                                        <td class=\"t21\" style=\"background-color:#FFFFFF;overflow:hidden;width:480px;padding:60px 60px 60px 60px;border-radius:8px 8px 8px 8px;\">
                                            <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100% !important;\">
                                                <tr>
                                                    <td align=\"left\">
                                                        <table class=\"t2\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t1\" style=\"width:55px;padding:0 15px 0 0;\">
                                                                    <div style=\"font-size:0px;\">
                                                                        <img class=\"t0\" style=\"display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;\" width=\"55\" height=\"35.78125\" alt=\"DiceFinder Logo\" src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-dicefinder.png")), "html", null, true);
        yield "\" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t3\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:42px;line-height:42px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"center\">
                                                        <table class=\"t6\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t5\" style=\"width:480px;\">
                                                                    <h1 class=\"t4\" style=\"margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:41px;font-weight:800;font-size:39px;text-align:left;color:#333333;\">
                                                                        Confirmez votre compte
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t7\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:16px;line-height:16px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"center\">
                                                        <table class=\"t10\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t9\" style=\"width:480px;\">
                                                                    <p class=\"t8\" style=\"margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-size:16px;text-align:left;color:#333333;\">
                                                                        Bienvenue chez DiceFinder ! Vous êtes à un clic de rejoindre notre communauté. Veuillez cliquer sur le bouton ci-dessous pour confirmer votre compte. Ce lien expirera dans ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 287, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 287, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        yield ".
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t12\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:35px;line-height:35px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"left\">
                                                        <table class=\"t14\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t13\" style=\"background-color:#000000;border:1px solid #000;overflow:hidden;width:103px;text-align:center;line-height:34px;border-radius:40px;\">
                                                                    <a class=\"t11\" href=\"";
        // line 304
        yield (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 304, $this->source); })());
        yield "\" style=\"display:block;margin:0;font-family:Inter Tight,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:900;font-size:13px;text-transform:uppercase;color:#FFFFFF;text-align:center;\" target=\"_blank\">
                                                                        Confirmer
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t17\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:35px;line-height:35px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"t23\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:60px;line-height:60px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class=\"gmail-mobile-forced-width\" style=\"white-space: nowrap; font: 15px courier; line-height: 0;\">&nbsp; &nbsp;</div>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/confirmation_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  359 => 304,  339 => 287,  300 => 251,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!--
* Cet e-mail a été construit en utilisant Tabular.
* Pour plus d'informations, visitez https://tabular.email
-->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"fr\">

<head>
    <title>Confirmation de compte - DiceFinder</title>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!--[if !mso]>-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!--<![endif]-->
    <meta name=\"x-apple-disable-message-reformatting\" content=\"\" />
    <meta content=\"target-densitydpi=device-dpi\" name=\"viewport\" />
    <meta content=\"true\" name=\"HandheldFriendly\" />
    <meta content=\"width=device-width\" name=\"viewport\" />
    <meta name=\"format-detection\" content=\"telephone=no, date=no, address=no, email=no, url=no\" />
    <style type=\"text/css\">
        table {
            border-collapse: separate;
            table-layout: fixed;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt
        }

        table td {
            border-collapse: collapse
        }

        .ExternalClass {
            width: 100%
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%
        }

        .gmail-mobile-forced-width {
            display: none;
            display: none !important;
        }

        body,
        a,
        li,
        p,
        h1,
        h2,
        h3 {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        html {
            -webkit-text-size-adjust: none !important
        }

        body,
        #innerTable {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        #innerTable img+div {
            display: none;
            display: none !important
        }

        img {
            Margin: 0;
            padding: 0;
            -ms-interpolation-mode: bicubic
        }

        h1,
        h2,
        h3,
        p,
        a {
            line-height: inherit;
            overflow-wrap: normal;
            white-space: normal;
            word-break: break-word
        }

        a {
            text-decoration: none
        }

        h1,
        h2,
        h3,
        p {
            min-width: 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            display: inline-block !important;
            border: 0;
            padding: 0;
            margin: 0
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important
        }

        u+#body a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        a[href^=\"mailto\"],
        a[href^=\"tel\"],
        a[href^=\"sms\"] {
            color: inherit;
            text-decoration: none
        }
    </style>
    <style type=\"text/css\">
        @media (min-width: 481px) {
            .hd {
                display: none !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            .hm {
                display: none !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            .t18,
            .t21,
            .t5,
            .t9 {
                width: 400px !important
            }

            .t20,
            .t23 {
                mso-line-height-alt: 0px !important;
                line-height: 0 !important;
                display: none !important
            }

            .t21 {
                padding: 40px !important;
                border-radius: 0 !important
            }
        }
    </style>
    <style type=\"text/css\">
        @media (max-width: 480px) {
            [class~=\"x_t20\"] {
                mso-line-height-alt: 0px !important;
                line-height: 0px !important;
                display: none !important;
            }

            [class~=\"x_t23\"] {
                mso-line-height-alt: 0px !important;
                line-height: 0px !important;
                display: none !important;
            }

            [class~=\"x_t21\"] {
                padding-left: 40px !important;
                padding-top: 40px !important;
                padding-bottom: 40px !important;
                padding-right: 40px !important;
                border-top-left-radius: 0px !important;
                border-top-right-radius: 0px !important;
                border-bottom-right-radius: 0px !important;
                border-bottom-left-radius: 0px !important;
                width: 400px !important;
            }

            [class~=\"x_t5\"] {
                width: 400px !important;
            }

            [class~=\"x_t9\"] {
                width: 400px !important;
            }

            [class~=\"x_t18\"] {
                width: 400px !important;
            }
        }
    </style>
    <!--[if !mso]>-->
    <link href=\"https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;700;800&amp;family=Inter+Tight:wght@900&amp;display=swap\" rel=\"stylesheet\" type=\"text/css\" />
    <!--<![endif]-->
    <!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
</head>

<body id=\"body\" class=\"t26\" style=\"min-width:100%;Margin:0px;padding:0px;background-color:#F4F4F4;\">
    <div class=\"t25\" style=\"background-color:#F4F4F4;\">
        <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
            <tr>
                <td class=\"t24\" style=\"font-size:0;line-height:0;mso-line-height-rule:exactly;background-color:#F4F4F4;\" valign=\"top\" align=\"center\">
                    <!--[if mso]>
                    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\">
                    <v:fill color=\"#F4F4F4\"/>
                    </v:background>
                    <![endif]-->
                    <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" id=\"innerTable\">
                        <tr>
                            <td>
                                <div class=\"t20\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:60px;line-height:60px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\">
                                <table class=\"t22\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                    <tr>
                                        <td class=\"t21\" style=\"background-color:#FFFFFF;overflow:hidden;width:480px;padding:60px 60px 60px 60px;border-radius:8px 8px 8px 8px;\">
                                            <table role=\"presentation\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100% !important;\">
                                                <tr>
                                                    <td align=\"left\">
                                                        <table class=\"t2\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t1\" style=\"width:55px;padding:0 15px 0 0;\">
                                                                    <div style=\"font-size:0px;\">
                                                                        <img class=\"t0\" style=\"display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;\" width=\"55\" height=\"35.78125\" alt=\"DiceFinder Logo\" src=\"{{ absolute_url(asset('images/logo-dicefinder.png')) }}\" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t3\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:42px;line-height:42px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"center\">
                                                        <table class=\"t6\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t5\" style=\"width:480px;\">
                                                                    <h1 class=\"t4\" style=\"margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:41px;font-weight:800;font-size:39px;text-align:left;color:#333333;\">
                                                                        Confirmez votre compte
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t7\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:16px;line-height:16px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"center\">
                                                        <table class=\"t10\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-left:auto;Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t9\" style=\"width:480px;\">
                                                                    <p class=\"t8\" style=\"margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-size:16px;text-align:left;color:#333333;\">
                                                                        Bienvenue chez DiceFinder ! Vous êtes à un clic de rejoindre notre communauté. Veuillez cliquer sur le bouton ci-dessous pour confirmer votre compte. Ce lien expirera dans {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t12\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:35px;line-height:35px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align=\"left\">
                                                        <table class=\"t14\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" style=\"Margin-right:auto;\">
                                                            <tr>
                                                                <td class=\"t13\" style=\"background-color:#000000;border:1px solid #000;overflow:hidden;width:103px;text-align:center;line-height:34px;border-radius:40px;\">
                                                                    <a class=\"t11\" href=\"{{ signedUrl|raw }}\" style=\"display:block;margin:0;font-family:Inter Tight,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:900;font-size:13px;text-transform:uppercase;color:#FFFFFF;text-align:center;\" target=\"_blank\">
                                                                        Confirmer
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class=\"t17\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:35px;line-height:35px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"t23\" style=\"mso-line-height-rule:exactly;mso-line-height-alt:60px;line-height:60px;font-size:1px;display:block;\">&nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class=\"gmail-mobile-forced-width\" style=\"white-space: nowrap; font: 15px courier; line-height: 0;\">&nbsp; &nbsp;</div>
</body>

</html>
", "registration/confirmation_email.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\registration\\confirmation_email.html.twig");
    }
}
