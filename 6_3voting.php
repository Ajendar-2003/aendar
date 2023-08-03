<!DOCTYPE html>
<html>
<head>
	<title>Vote | CUSAT</title>
	<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    text-align: center;
}

header {
    background-color: #A3DFE6;
    color: black;
    text-align: center;
    padding: 20px 0;
    border-bottom: 2px solid #005793;
}

header h1, header h2, header h3 {
    margin: 5px 0;
}

.container {
    margin: 20px auto;
    max-width: 65%;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.row {
    text-align: center;
}

.cell {
    padding: 10px;
    border: 1px solid #ccc;
}

.cell.serial {
    width: 10%;
}

.cell.name {
    width: 40%;
}

.cell.symbol {
    width: 20%;
}

.cell.vote {
    width: 10%;
}

.cell img {
    max-height: 50px;
    max-width: 50px;
}

.submit-btn {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #005793;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
    header img {
        display: none;
    }

    .container {
        max-width: 90%;
    }

    .cell {
        font-size: 14px;
    }
}

@media screen and (max-width: 480px) {
    .container {
        padding: 10px;
    }

    .cell {
        padding: 5px;
    }

    .submit-btn {
        padding: 5px 10px;
        background-color: #005793;
    }
}

    </style>
</head>
<body>
<header id="header" >
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="left" alt="logo">
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="right" alt="logo">    
    <h1>COLLEGE ELECTIONS</h1>
    <h2>SCHOOL OF ENGINEERING</h2>
    <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
</header>

    <br>
	<h1>Candidate List</h1>
	<div class="container">
	<form method="post" action="voting.php">
		<table class="table">
			<tr class="row">
				<th class="cell serial">Serial No.</th>
				<th class="cell name">Name</th>
				<th class="cell symbol">Symbol</th>
				<th class="cell vote">Vote</th>
			</tr>
			<tr class="row">
				<td class="cell serial" candidate_id="1">1</td>
				<td class="cell name">Candidate 1</td>
				<td class="cell symbol"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTREsCmWOCReVAiM3Kf1afG1jvycoZ7SMk1rQ&usqp=CAU" height="50px" alt="kite"> </td>
				<td class="cell"><input type="radio" name="candidate" value="1" required></td>
			</tr>
			<tr class="row">
				<td class="cell serial" candidate_id="2">2</td>
				<td class="cell name">Candidate 2</td>
				<td class="cell symbol"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp1npZAzqPafbhFRzxNNjv7Jl7kcQrM8XHOw&usqp=CAU" alt="bat" height="50px" > </td>
				<td class="cell"><input type="radio" name="candidate" value="2" required></td>
			</tr>
            <tr class="row">
				<td class="cell serial" candidate_id="3">3</td>
				<td class="cell name">Candidate 3</td>
				<td class="cell symbol"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJusiJnmake-TcylMEIR2L_yNSifStHaN8vA&usqp=CAU" alt="lamp"height="50px"> </td>
				<td class="cell"><input type="radio" name="candidate" value="3" required></td>
			</tr>
             <tr class="row">
				<td class="cell serial" candidate_id="4">4</td>
				<td class="cell name">Candidate 4</td>
				<td class="cell symbol"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSndD63Scev656sVAP7DyDWG0tUeFknranUWgPrajjIf7VqJzjeTlPOG-D7sJ6WpqV-PlU&usqp=CAU" alt="candles" height="50px"> </td>
				<td class="cell"><input type="radio" name="candidate" value="4" required></td>
			</tr>
             <tr class="row">
				<td class="cell serial" candidate_id="5">5</td>
				<td class="cell name">Candidate 5</td>
				<td class="cell symbol"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSixyiYgJc0VEpYRBwU_gXRFGg5CwO7YbM3nuHEeHBm5GNsBmIsn5ncHJO8SPSBf8-yNXo&usqp=CAU" alt="jar" height="50px"></td>
				<td class="cell"><input type="radio" name="candidate" value="5" required></td>
			</tr>
             <tr class="row">
				<td class="cell serial" candidate_id="6">6</td>
				<td class="cell name">Candidate 6</td>
				<td class="cell symbol"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFEm1n-XuQOZ3Z46805g6z6R4NTiAnldRLlkrbYrQaVKBwn2y78jbJbVPqteqk_umRvvY&usqp=CAU" alt="Two Leaves" height="50px"></td>
				<td class="cell"><input type="radio" name="candidate" value="6" required></td>
			</tr>
             <tr class="row">
				<td class="cell serial" candidate_id="7">7</td>
				<td class="cell name">Candidate 7</td>
				<td class="cell symbol"><img src="https://sec.py.gov.in/sites/default/files/almirah.bmp" alt="Wardrobe" height="50px"></td>
				<td class="cell"><input type="radio" name="candidate" value="7" required></td>
			</tr>	
             <tr class="row">
				<td class="cell serial" candidate_id="8">8</td>
				<td class="cell name">Candidate 8</td>
				<td class="cell symbol"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Indian_Election_Symbol_Tree.png/800px-Indian_Election_Symbol_Tree.png" alt="Tree" height="50px"></td>
				<td class="cell"><input type="radio" name="candidate" value="8" required></td>
			</tr>
			<!-- Add more rows for other candidates -->
			</table>
			<input type="submit" class="submit-btn" value="Submit Vote" name="submit">
	</form> 
	</div>  
	</body>
</html>