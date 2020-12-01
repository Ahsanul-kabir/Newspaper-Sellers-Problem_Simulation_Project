<?php include 'header.php'; ?>

<div class="container">

	<div class="heading">
    <h3 style="text-align: center;">Newspaper Seller’s Problem Solved By Ahsanul Kabir</h3>
	</div>


    <div class="left">
        <form action="step2.php" method="POST">

            <div class="row">
                <div class="col-6 col-md-6">

                    <label>Row of Newspaper Demanded</label>
                    <input type="text" class="form-control" name="nDemand">
                    <label>Row of Random-Digit for Newsday & Demand</label>
                    <input type="text" class="form-control" name="rDigit">
                    <label>Amount of Daily Newspapers</label>
                    <input type="text" class="form-control" name="tNewspaper">
                    <label>Per Newspaper Cost</label>
                    <input type="text" class="form-control" name="pnCost">
                    <label>Per Newspaper Sale Rate</label>
                    <input type="text" class="form-control" name="saleRate">
                    <label>Salvage Rate of Scrap Paper</label>
                    <input type="text" class="form-control" name="sRate">

                </div>
            </div>

            <input type="hidden" name="action_type" value="step2">
            <br>
            <input type="submit" name='submit' value="Next Step" class='btn btn-primary' />

        </form>
    </div>

    <div class="Right">
		<img src="ami.jpg" alt="Ami">
    </div>

</div>

</body>

</html>