/**
 * Created by Administrator on 2018/8/28.
 */
$('#myModal').on('shown.bs.modal',function(){
    var myChart=echarts.init(document.getElementById('chart1'));
    console.log(myChart);
    // alert();
    // myChart.resize();
});
