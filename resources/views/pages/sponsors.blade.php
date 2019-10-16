@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background dark-background-max-height">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/river-1.jpeg') }}" class="half-opacity banner-max-height">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Sponsors
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section custom-section-padded">
        <div class="body-padding body-text">
            <div style="width:98%; margin:20px auto; background: none">
                <table width="800px" border="0" cellspacing="10" cellpadding="0" style="margin:auto; text-align:center">
                    <tr>
                        <td valign="middle" colspan="3" style="font-size:80%">Major funding provided to WWF by:</td>
                    </tr>
                    <tr>
                        <td width="50%" height="98" valign="middle" colspan="3"><img src="/images/cokenew.jpg"/></td>
                    </tr>
                    <tr>
                        <td valign="middle" colspan="3" style="font-size:80%" height="30px">Additional funding provided
                            to WWF by:
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><img src="/images/diversey.jpg"/></td>
                    </tr>
                    <tr>
                        <td valign="bottom" style="font-size:80%" width="300px" height="40px">Major funding provided to
                            TNC by:
                        </td>
                        <td width="300px" align="center" valign="bottom" style="font-size:80%">through:</td>
                    </tr>
                    <tr>
                        <td style="padding-top:20px" align="center" width="300px"><img src="/images/usaidnew.png"
                                                                                       alt="USAID"/></td>
                        <td width="300px" align="center">
                            <img src="/images/PiP.gif" alt="PiP"/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="3" style="font-size:80%" height="30px">and TNC's Rodney
                            Johnson/Katharine Ordway Stewardship Endowment (RJ/KOSE). TNC would also like to thank Bill
                            Barclay, Ofelia Miramontes, and John Mordgridge for their generous support.
                        </td>
                    <tr>
                        <td height="72" align="center" colspan="3"><p><br>This website is made possible by the generous
                                support of the American people through the United States Agency for International
                                Development (USAID) through the Award No EDG-A-00-01-00023-00 for the Parks in Peril
                                Program. The contents are the responsibility of The Nature Conservancy and WWF and do
                                not necessarily reflect the views of USAID or the United States Government.</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@stop
