<html>
	<head>
		<title>Calculator</title>
	</head>
	<body style="padding: 20px;">
		<div class="row">
			<div class="col-sm-6">
				<form method="post" action="<?php echo site_url("Calc1/calc"); ?>">
					<table border="1" align="center"  style="text-align:center;">
						<tr>
							<td>INSERT NUMBER 1</td>
							<td><input type="number" name="txtNum1" style="width: 100%;"></td>
						</tr>

						<tr>
							<td>INSERT NUMBER 2</td>
							<td align="center"><input type="number" name="txtNum2" style="width: 100%;"></td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<input type="submit" name="btnAdd" value="+">
								<input type="submit" name="btnSub" value="-">
								<input type="submit" name="btnMulti" value="*">
								<input type="submit" name="btnDiv" value="/">
								<br><hr>
								<input type="reset" value="RESET" name="btnReset">
								</hr>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>