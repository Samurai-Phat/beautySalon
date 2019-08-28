@extends('layouts.verify')

@section('content')
    <td style="vertical-align:top;padding-bottom:0px;">
        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
            <tr>
                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                    <div style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:32px;font-weight:light;line-height:24px;text-align:center;color:#637381;">
                        <h1 style="line-height:1.3;font-size:32px;font-weight:100;margin-bottom:1px;"> Please verfiy your email to activate account </h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:300px;line-height:100%;">
                        <tr>
                            <td align="center" bgcolor="#00cc99" role="presentation" style="border:none;border-radius:3px;cursor:auto;padding:10px 25px;background:#00cc99;" valign="middle">
                                <a href="{{ route('verification.resend') }}" style="background:#00cc99;color:#ffffff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:17px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;"
                                   target="_blank">
                                    Activate Account
                                </a> </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
@endsection
