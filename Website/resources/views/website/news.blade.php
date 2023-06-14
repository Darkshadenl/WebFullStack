@extends('website.base')
@section('content')
					<table width=100%>
						<tr>
							<td colspan='3'>
								<p>
									<img src="../Images/dragon-small.png" style="float:left;height:200px" alt="Golden Dragon">
									<img src="../Images/dragon-small-flipped.png" style="float:right;height:200px" alt="Golden Dragon">
									<span style="font-size:40px;font-weight:bold;color:yellow">Chinees Indische Specialiteiten</span><br>
									<span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>
								</p>
								<p>
									<table style="margin:auto;font-size:20px;color:white" border="1px solid white">
										<tr background="../Images/menu_bg_gradient.png">
											<td valign="middle">
												<a href="/menu" style="color:white">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menukaart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</a>
											</td>
											<td valign="middle">
												<a href="/news" style="color:white">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nieuws&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</a>											</td>
											<td valign="middle">
												<a href="/contact" style="color:white">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</a>
											</td>
                                            <td valign="middle">
                                                <a href="/order" style="color:white">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bestel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            </td>
										</tr>
									</table>
								</p>
							</td>
						</tr>
						<tr style="padding-top:50px">
							<td colspan="3" height="50px">
							</td>
						</tr>
						<tr style="padding-top:50px">
							<td width="50px">
							</td>
							<td align="center" style='font-size:5;border:1px solid black;background:floralwhite'> <br>
								<h3>Door de Corona crisis is De Gouden Draak op het moment slechts beperkt open.
									<br>Het restaurant-gedeelte is gesloten. U kan uw favoriete gerechten nog wel afhalen.
								</h3>
								<br>
							</td>
							<td width="50px">
							</td>
						</tr>
					</table>
					<br>
					<div text-align="center"><a href="/contact">Naar Contact</a></div>
@endsection
