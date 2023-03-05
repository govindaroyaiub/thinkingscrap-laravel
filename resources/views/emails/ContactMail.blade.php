<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Thinking Scrap</title>
		<style type="text/css">
			/* ----- Custom Font Import ----- */
			@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);

			/* ----- Text Styles ----- */
			table{
				font-family: 'Lato', Arial, sans-serif;
				-webkit-font-smoothing: antialiased;
				-moz-font-smoothing: antialiased;
				font-smoothing: antialiased;
			}

			@media only screen and (max-width: 700px){
				/* ----- Base styles ----- */
				.full-width-container{
					padding: 0 !important;
				}

				.container{
					width: 100% !important;
				}

				/* ----- Header ----- */
				.header td{
					padding: 30px 15px 30px 15px !important;
				}

				/* ----- Half block ----- */
				.half-block{
					display: block !important;
				}

				.half-block tr{
					display: block !important;
				}

				.half-block td{
					display: block !important;
				}

				.half-block__image{
					width: 100% !important;
					background-size: cover;
				}

				.half-block__content{
					width: 100% !important;
					box-sizing: border-box;
					padding: 25px 15px 25px 15px !important;
				}

				/* ----- Hero subheader ----- */
				.hero-subheader__title{
					padding: 80px 15px 15px 15px !important;
					font-size: 35px !important;
				}

				.hero-subheader__content{
					padding: 0 15px 90px 15px !important;
				}

				/* ----- Title block ----- */
				.title-block{
					padding: 0 15px 0 15px;
				}

				/* ----- Paragraph block ----- */
				.paragraph-block__content{
					padding: 25px 15px 18px 15px !important;
				}
			}
		</style>

		<!--[if gte mso 9]><xml>
			<o:OfficeDocumentSettings>
				<o:AllowPNG/>
				<o:PixelsPerInch>96</o:PixelsPerInch>
			</o:OfficeDocumentSettings>
		</xml><![endif]-->
	</head>

	<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
		<span style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">{{ $details['senderName'] }}, says hello!</span>

		<!-- / Full width container -->
		<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
			<tr>
				<td align="center" valign="top">
					<!-- / 700px container -->
					<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
						<tr>
							<td align="center" valign="top">
								<!-- / Header -->
								<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
											<a href="#" style="font-size: 30px; text-decoration: none; color: #4b4e6d;">Planet Nine Email Notifications</a>
										</td>
									</tr>
								</table>
								<!-- /// Header -->

								<!-- / Hero subheader -->
								<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td class="hero-subheader__title" style="font-size: 20px; font-weight: bold; padding: 20px 0 15px 0;" align="left">Hi,</td>
									</tr>
									<tr>
										<td class="hero-subheader__title" style="font-size: 20px; font-weight: bold; padding: 0px 0 15px 0;" align="left">Looks like someone is trying to stay in touch.</td>
									</tr>
									<tr>
										<td class="hero-subheader__title" style="font-size: 43px; font-weight: bold; padding: 30px 0 15px 0;" align="left">Name: {{ $details['senderName'] }}</td>
									</tr>

									<tr>
										<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">Message: {{ $details['senderMessage'] }}</td>
									</tr>

									<tr>
										<td class="hero-subheader__content" style="font-size: 16px; line-height: 10px; color: #969696; padding: 0 20px 90px 0;" align="left">Email: {{ $details['senderEmail'] }}</td>
									</tr>
								</table>
								<!-- /// Hero subheader -->

								<!-- / Footer -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
												<tr>
													<td style="text-align: center; padding: 50px 0 10px 0;">
														<a href="#" style="font-size: 28px; text-decoration: none; color: #4b4e6d;">Planetnine</a>
													</td>
												</tr>

												<tr>
													<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; <?= Date('Y') ?> <a href="https://www.planetnine.com/" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Planetnine</a>. <br />All rights reserved.</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Footer -->
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>