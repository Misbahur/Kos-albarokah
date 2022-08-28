<!DOCTYPE html>
<html lang="en">
<head>
	<title>Invoice Kos Albarokah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!-- Invoice styling -->
	<style>
		body {
			/* font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; */
			text-align: center;
			color: #777;
		}

		body h1 {
			font-weight: 150;
			margin-bottom: 0px;
			padding-bottom: 0px;
			color: #000;
		}

		body h3 {
			font-weight: 150;
			margin-top: 5px;
			margin-bottom: 10px;
			font-style: italic;
			color: #555;
		}

		body a {
			color: #06f;
		}

		.invoice-box {
			max-width: 400px;
			height: 450px;
			margin: auto;
			padding: 15px;
			border: 1px solid #eee;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
			font-size: 8px;
			line-height: 12px;
			/* font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; */
			color: #555;
		}

		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
			border-collapse: collapse;
		}

		.invoice-box table td {
			padding: 3px;
			vertical-align: top;
		}

		.invoice-box table tr td:nth-child(3) {
			text-align: right;
		}

		.invoice-box table tr.top table td {
			padding-bottom:5px;
		}

		.invoice-box table tr.top table td.title {
			font-size: 25px;
			line-height: 25px;
			color: #333;
		}

		.invoice-box table tr.information table td {
			padding-bottom: 10px;
		}

		.invoice-box table tr.heading td {
			background: #eee;
			border-bottom: 1px solid #ddd;
			
			font-weight: bold;
		}

		.invoice-box table tr.details td {
			padding-bottom: 2px;
		}

		.invoice-box table tr.item td {
			border-bottom: 1px solid #eee;
		}

		.invoice-box table tr.item.last td {
			border-bottom: none;
		}

		.invoice-box table tr.total td:nth-child(2) {
			border-top: 0px solid #eee;
			font-weight: bold;
		}

		.invoice-box table tr.titlettd td {
			font-weight: bold;
			text-align: center;
			padding-top: 30px;
		}

		.invoice-box table tr.ttd td {
			font-weight: bold;
			text-align: center;
			padding-top: 60px;
		}

		@media only screen and (max-width: 300px) {
			.invoice-box table tr.top table td {
				width: 100%;
				display: block;
				text-align: center;
			}

			.invoice-box table tr.information table td {
				width: 100%;
				display: block;
				text-align: center;
			}
		}
	</style>
</head>

<body>
	


	<table width="100%">
		<tr>
			<td class="bg-grey" style="width:25%;height:25%;line-height:0;">
				<div class="invoice-box">
					<table>
						<tr class="top">
							<td colspan="3">
								<table>
									<tr>
										<td style="font-size: 12px; font-weight: bold;">
											Invoice # {{ $mailData['noinvoice'] }}
										</td>
										<td>
										</td>
										<td>
											Tanggal Transaksi: {{ $mailData['tanggaltransaksi'] }}
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Tanggal Sewa : {{ $mailData['tanggalsewa'] }}</td>
						</tr>

						<tr class="information">
							<td colspan="3">
								<table>
									<tr>
										<td>
											<b>Dari</b><br/>
											<b>{{ $mailData['namapenyewa'] }}</b><br />
											@if ($mailData['jkpenyewa'] === 'L')
												Laki - laki<br />
											@else
												Perempuan<br />
											@endif
											{{ $mailData['alamatpenyewa'] }}
										</td>

										<td>
											
										</td>
										<td>
											<b>Kepada</b><br/>
											Kos Al-Barokah<br />
											Kost<br/>
											Karangbendo, Kec. Rogojampi
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr class="heading">
							<td>LAMA SEWA</td>
							
							<td>NAMA KOST</td>
							<td>BIAYA</td>
						</tr>

						
						<tr class="details">
							<td>{{ $mailData['lamasewa'] }}</td>
							<td> {{ $mailData['cabang'] }} {{ $mailData['kodekost'] }}</td>
							<td>Rp. {{ number_format($mailData['harga']) }}</td>
						</tr>
					</table>
				</div>
				
			</td>
	</table>
</body>
</html>