function calcular(){
    let valor, montante, total, total_socio, total_gerente, total_consultor, total_analista;
    parseInt(valor = document.getElementById("totalusers").value);

    horas_socio_100 = 2;
    horas_gerente_100 = 4;
    horas_consultor_100 = 10;
    horas_analistas_100 = 14;

    valor_hora_socio = 50;
    valor_hora_gerente = 20;
    valor_hora_consultor = 10;
    valor_hora_analista = 6;

    total_socio = horas_socio_100 * valor_hora_socio;
    total_gerente = horas_gerente_100 * valor_hora_gerente;
    total_consultor = horas_consultor_100 * valor_hora_consultor;
    total_analista = horas_analistas_100 * valor_hora_analista;

    montante = total_socio + total_gerente + total_consultor + total_analista;

    total = (valor/100) * montante;

    document.getElementById("valor").value = total.toFixed(2);
}