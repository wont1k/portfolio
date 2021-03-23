function res() {
	document.getElementById("age_er").innerHTML="";
	var age=document.getElementById("age").value; //получение значения возраста 
	age = parseInt(age); 	//получение численного значения возраста
	if ((age < 13) || (age > 80)){
		var error = document.getElementById("age_er");
		error.innerHTML="Неверно введён возраст";
		retun;
	}									
	var height=document.getElementById("height").value; //получение роста
	height = parseInt(height);
	var weight=document.getElementById("weight").value; //получение веса
	weight = parseInt(weight);
	var choose = document.getElementById("active").options.selectedIndex; //получение значение выбора касательно физической нагрузки
	var a = document.getElementById("active").options[choose].value;			//получение коэфицента в зависимости от физ.нагрузки
	var result_m = (10 * weight + 6.25 * height - 5 * age + 5) * a 		
	var result_f = (10 * weight + 6.25 * height - 5 * age - 161) * a
	var male = document.getElementsByName("rad"); 				// получение значения пола 
	$('#day').css('visibility', 'visible');
	$('#for_loss').css('visibility', 'visible');
	if (male[0].checked) {
		document.getElementById("totalCals").innerHTML = result_m.toFixed() + " ккал";
		document.getElementById("weight_loss").innerHTML = (result_m * 0.8).toFixed() + " ккал"} 
	else if (male[1].checked) {
		document.getElementById("totalCals").innerHTML = result_f.toFixed() + " ккал";
		document.getElementById("weight_loss").innerHTML = (result_f * 0.8).toFixed() + " ккал" }
	//document.getElementById("totalCals").innerHTML = a * 5;
}
