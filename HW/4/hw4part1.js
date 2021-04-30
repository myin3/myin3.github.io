var pay = new Array();
var hours = new Array();
var numOfEmployees = i = 0;
var sum = 0;





function enterPayroll(){
	while(true){
		hours[i] = window.prompt("How many hours did the employee work?");
		if (hours[0] < 0) {
			document.write("You have no employees.<br>");
			changes();
			break;
		}
		else if(hours[i] < 0){
			break;
		}
		else{
			numOfEmployees++;
			if (hours[i] <= 40) {
				pay[i] = hours[i] * 15;
			}
			else{
				pay[i] = (40 * 15) + ((hours[i] - 40) * (15*1.5));
			}
			sum += pay[i];
		}
		i++;
	}
}


function changes(){
	document.body.style.backgroundColor = "yellow";
	document.body.style.color = "red";
}

function printPayroll(){

	var rows = new Array();

	var table = document.createElement("table");
	table.setAttribute("id", "payroll");
	document.body.appendChild(table);
	var row = document.createElement("tr");
	row.setAttribute("id", "row");
	document.getElementById("payroll").appendChild(row);

	var header1 = document.createElement("th");
	var text1 = document.createTextNode("Employee Index");
	header1.appendChild(text1);
	header1.setAttribute("id", "header1");
	document.getElementById("row").appendChild(header1);

	var header2 = document.createElement("th");
	var text2 = document.createTextNode("Number of Hours Worked");
	header2.appendChild(text2);
	header2.setAttribute("id", "header2");
	document.getElementById("row").appendChild(header2);

	var header3 = document.createElement("th");
	var text3 = document.createTextNode("Overall Pay");
	header3.appendChild(text3);
	header3.setAttribute("id", "header3");
	document.getElementById("row").appendChild(header3);

	for (var i = 0; i < numOfEmployees; i++) {

		let index = i + 1;

		rows[i] = document.createElement("tr");
		rows[i].setAttribute("id", i);
		document.getElementById("payroll").appendChild(rows[i]);

		var cell1 = document.createElement("td");
		var data1 = document.createTextNode(index);
		cell1.appendChild(data1);
		cell1.setAttribute("id", "data" + i );
		document.getElementById(i).appendChild(cell1);

		var cell2 = document.createElement("td");
		var data2 = document.createTextNode(hours[i]);
		cell2.appendChild(data2);
		cell2.setAttribute("id", "data" + i );
		document.getElementById(i).appendChild(cell2);


		var cell3 = document.createElement("td");
		var data3 = document.createTextNode(pay[i]);
		cell3.appendChild(data3);
		cell3.setAttribute("id", "data" + i );
		document.getElementById(i).appendChild(cell3);
	}
	document.write("Sum of all employees pay is: " + sum);
}