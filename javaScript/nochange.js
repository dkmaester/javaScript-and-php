function computeCost() 
{
var french = document.getElementById("french").value;
var hazlenut = document.getElementById("hazlenut").value;
var colombian = document.getElementById("colombian").value;
cost = (french * 3.49 + hazlenut * 3.95 + colombian * 4.59).toFixed(2);
document.getElementById("cost").value = cost;
ivu = (cost*.115).toFixed(2);
document.getElementById("ivu").value = ivu;
var total = parseFloat(cost) + parseFloat(ivu);
document.getElementById("costIvu").value = total;
}