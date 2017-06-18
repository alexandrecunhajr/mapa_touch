<?php

namespace BaseApp\Model\DAO;

class HomeDao extends BaseDao {

    public function previ_loja() {
        $sql = "LEFT OUTER JOIN previsao.previ_loja pl ON lj.loja=pl.loja AND data=CURDATE() AND HOUR(pl.hora)=HOUR(curtime())-1";
        return $sql;
    }


    ////////////////////////////////////////ESTOQUE///////////////////////////////////////////////////////////////////////////////////////
    ////////////////COMERCIAL////////////
  public function estoque_gerencia(){
    $sql="LEFT JOIN
            (SELECT 
              descricao descricao_estoque, 
              estoque_valor_cia estoque_valor
            FROM
              lasa.maiores_estoques_gerencias)est on est.descricao_estoque=ger.descricao";
    return $sql;
  }
  public function estoque_deptos(){
    $sql="LEFT JOIN
              (SELECT 
                  ABS(REPLACE(deptos, 'D', '')) depto_es, 
                  estoque_valor_cia estoque_valor
              FROM
                  lasa.maiores_estoques_deptos)est on est.depto_es=dept.id";
    return $sql;
  }
    //////////////GEOGRAFICO////////////
  public function estoque_regiao(){
    $sql="LEFT JOIN
          (SELECT 
                regiao regiao_est, 
                sum(estoque_valor)estoque_valor
            FROM
                lasa.maiores_estoques_loja es
                    INNER JOIN
                lasa.lojas lj ON lj.centro = es.loja
            GROUP BY regiao)est on est.regiao_est=reg.sigla";
    return $sql;
  }
  public function estoque_distrito(){
    $sql="LEFT JOIN
            (SELECT 
                lj.distrito distrito_est, 
                sum(estoque_valor)estoque_valor
            FROM
                lasa.maiores_estoques_loja el
                inner join
                lasa.lojas lj on
                lj.centro=el.loja
            GROUP BY lj.distrito)es on es.distrito_est=dist.distritos";
    return $sql;
  }
  public function estoque_loja(){
    $sql="LEFT JOIN
            (SELECT 
               loja loja_est, 
               estoque_valor
            FROM
                lasa.maiores_estoques_loja)es on es.loja_est=lj.centro";
    return $sql;
  }
    /////////COMERCIAL X GEOGRAFICO///////////////
  public function estoque_loja_depto(){
    $sql="LEFT JOIN
            (SELECT 
                loja loja_estoque, 
                ABS(REPLACE(depto, 'D', '')) depto_estoque, 
                estoque_valor
            FROM
                lasa.maiores_estoques_depto_loja)es on 
                es.loja_estoque=lj.centro
                and es.depto_estoque=dept.id";
    return $sql;
  }
  public function estoque_regiao_depto(){
      $sql="LEFT JOIN
                (SELECT 
                    regiao regiao_estoque, 
                    ABS(REPLACE(depto, 'D', '')) depto_estoque, 
                    SUM(estoque_valor) estoque_valor
                FROM
                    lasa.lojas lj
                        INNER JOIN
                    lasa.maiores_estoques_depto_loja dl ON dl.loja = lj.centro
                GROUP BY regiao,depto
                )es on 
                  es.regiao_estoque=reg.sigla
                  and es.depto_estoque=dept.id";
      return $sql;
  }
  public function estoque_distrito_depto(){
      $sql="LEFT JOIN
                (SELECT 
                    distrito distrito_estoque, 
                    ABS(REPLACE(depto, 'D', '')) depto_estoque,
                    SUM(estoque_valor) estoque_valor
                FROM
                    lasa.lojas lj
                        INNER JOIN
                    lasa.maiores_estoques_depto_loja dl ON dl.loja = lj.centro
                GROUP BY distrito,depto
                )es on 
                  es.distrito_estoque=dist.distritos
                  and es.depto_estoque=dept.id";
      return $sql;
  } 
  public function estoque_loja_gerencia(){
    $sql="LEFT JOIN
            (SELECT 
                loja loja_estoque, 
                gerencia gerencia_estoque, 
                sum(estoque_valor)estoque_valor
            FROM
                lasa.maiores_estoques_depto_loja dl 
            INNER JOIN 
              lasa.departamentos dp on
                dp.id=ABS(REPLACE(dl.depto, 'D', ''))
            GROUP BY loja,gerencia)es on 
                es.loja_estoque=lj.centro
                and es.gerencia_estoque=ger.id";
    return $sql;
  }
  public function estoque_regiao_gerencia(){
    $sql="LEFT JOIN
            (SELECT 
                regiao regiao_estoque,
                gerencia gerencia_estoque,
                SUM(estoque_valor) estoque_valor
            FROM
                lasa.maiores_estoques_depto_loja dl
                    INNER JOIN
                lasa.lojas lj ON lj.centro = dl.loja
                    INNER JOIN
                lasa.departamentos dp ON dp.id = ABS(REPLACE(dl.depto, 'D', ''))
            GROUP BY regiao , gerencia)es on 
                es.regiao_estoque=lj.regiao
                and es.gerencia_estoque=ger.id";
    return $sql;
  }
  public function estoque_distrito_gerencia(){
    $sql="LEFT JOIN
            (SELECT 
                distrito distrito_estoque,
                gerencia gerencia_estoque,
                SUM(estoque_valor) estoque_valor
            FROM
                lasa.maiores_estoques_depto_loja dl
                    INNER JOIN
                lasa.lojas lj ON lj.centro = dl.loja
                    INNER JOIN
                lasa.departamentos dp ON dp.id = ABS(REPLACE(dl.depto, 'D', ''))
            GROUP BY distrito , gerencia)es on 
                es.distrito_estoque=lj.distrito
                and es.gerencia_estoque=ger.id";
    return $sql;
  }
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  //////////////////////////////////////////////////////////////////ITEM SEM VENDA////////////////////////////////////////////////////
  /////////GEOGRÀFICO//////////
  public function isv_regiao(){
      $sql="LEFT JOIN(SELECT 
                lj.regiao regiao_isv, SUM(valor) valor_isv
            FROM
                lasa.lojas lj
                    INNER JOIN
                dashboard_touch.item_sem_venda_loja_depto dp ON dp.loja = lj.loja
            GROUP BY lj.regiao)it on it.regiao_isv=reg.sigla";
      return $sql;
  }
  public function isv_distrito(){
      $sql="LEFT JOIN(SELECT 
                  lj.distrito distrito_isv, SUM(valor) valor_isv
              FROM
                  dashboard_touch.item_sem_venda_loja_depto dp
                      INNER JOIN
                  lasa.lojas lj ON lj.loja = dp.loja
              WHERE
                 1=1
              GROUP BY lj.distrito)it on it.distrito_isv=dist.distritos ";
      return $sql;
  }
  public function isv_loja(){
      $sql="LEFT JOIN (SELECT 
                loja loja_isv, SUM(valor) valor_isv
            FROM
                dashboard_touch.item_sem_venda_loja_depto dp
            WHERE
               1=1
            GROUP BY loja)it on it.loja_isv=lj.loja";
      return $sql;
  }
  ///////COMERCIAL/////////////
  public function isv_gerencia(){
      $sql="LEFT JOIN(SELECT 
                  dp.gerencia, SUM(valor) valor_isv
              FROM
                  dashboard_touch.item_sem_venda_loja_depto it
                      INNER JOIN
                  lasa.departamentos dp ON dp.id = it.depto
                  where 
                  1=1
              GROUP BY dp.gerencia)it on it.gerencia=ger.id";
      return $sql;
  }
  public function isv_depto(){
      $sql="LEFT JOIN (SELECT 
                depto depto_isv, SUM(valor) valor_isv
            FROM
                dashboard_touch.item_sem_venda_loja_depto dp
            WHERE
               1=1
            GROUP BY depto)it on it.depto_isv=dept.id";
      return $sql;
  }
  /////COMERCIAL X GEOGRÁFICO////////
  public function isv_loja_depto(){
    $sql="LEFT JOIN
                (SELECT 
                    loja loja_isv, 
                    depto depto_isv, 
                    SUM(valor) valor_isv
                FROM
                    dashboard_touch.item_sem_venda_loja_depto
                WHERE
                   1=1
                GROUP BY loja , depto)it on 
                    it.loja_isv=lj.loja 
                    and it.depto_isv=dept.id";
    return $sql;
  }
  public function isv_regiao_depto(){
    $sql="LEFT JOIN
                (SELECT 
                    lj.regiao regiao_isv,
                    depto depto_isv, 
                    SUM(valor) valor_isv
                FROM
                    dashboard_touch.item_sem_venda_loja_depto dp
                        INNER JOIN
                    lasa.lojas lj ON lj.loja = dp.loja
                WHERE
                   1=1
                GROUP BY lj.regiao,depto)it on 
                   it.regiao_isv=reg.sigla 
                   and it.depto_isv=dept.id";
    return $sql;
  }
  public function isv_distrito_depto(){
    $sql="LEFT JOIN
              (SELECT 
                  lj.distrito distrito_isv,
                  depto depto_isv, 
                  SUM(valor) valor_isv
              FROM
                  dashboard_touch.item_sem_venda_loja_depto dp
                      INNER JOIN
                  lasa.lojas lj ON lj.loja = dp.loja
              WHERE
                1=1  
              GROUP BY lj.distrito,depto)it on 
              it.distrito_isv=dist.distritos 
              and it.depto_isv=dept.id";
    return $sql;
  }
  public function isv_regiao_gerencia(){
    $sql="LEFT JOIN(SELECT 
              lj.regiao regiao_isv,gerencia gerencia_isv, SUM(valor) valor_isv
          FROM
              dashboard_touch.item_sem_venda_loja_depto dp
                  INNER JOIN
              lasa.lojas lj ON lj.loja = dp.loja
        inner join lasa.departamentos dept on
                  dept.id=dp.depto
          WHERE
             1=1
          GROUP BY lj.regiao,gerencia)it on it.regiao_isv=reg.sigla and it.gerencia_isv=ger.id";
    return $sql;
  }
  public function isv_distrito_gerencia(){
    $sql="LEFT JOIN(SELECT 
              lj.distrito distrito_isv,gerencia gerencia_isv, SUM(valor) valor_isv
          FROM
              dashboard_touch.item_sem_venda_loja_depto dp
                  INNER JOIN
              lasa.lojas lj ON lj.loja = dp.loja
        inner join lasa.departamentos dept on
                  dept.id=dp.depto
          WHERE
             1=1
          GROUP BY lj.distrito,gerencia)it on it.distrito_isv=dist.distritos and it.gerencia_isv=ger.id";
    return $sql;
  }
  public function isv_loja_gerencia(){
    $sql="LEFT JOIN(SELECT 
               loja loja_isv,gerencia gerencia_isv, SUM(valor) valor_isv
          FROM
              dashboard_touch.item_sem_venda_loja_depto dp
        inner join lasa.departamentos dept on
                  dept.id=dp.depto
          WHERE
              1=1
          GROUP BY loja,gerencia)it on it.loja_isv=lj.loja and it.gerencia_isv=dept.gerencia";
    return $sql;
  }

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    public function cresc_loja_depto() {
        $sql = "LEFT JOIN(SELECT 
   lj.loja loja_cresc, IF(HOUR(CURTIME()) >= 10, col4, '') cresc, ABS(REPLACE(col3, 'D', '')) depto_cresc
FROM
   lasa.lojas lj
       INNER JOIN
   mobile.importCrescimento imp ON imp.col2 = lj.centro
       AND col3 LIKE '%D0%')imp on
       imp.loja_cresc=lj.loja and imp.depto_cresc=dept.id";
        return $sql;
    }

    public function cresc_distrito_depto() {
        $sql = "LEFT JOIN(SELECT 
   SUBSTR(col2, 9, 30) distrito_cresc, ABS(REPLACE(col3, 'D', '')) depto_cresc, IF(HOUR(CURTIME()) >= 10, col4, '') cresc
FROM
   mobile.importCrescimento
WHERE
   col2 LIKE 'DIS%' AND col3 LIKE 'D0%')imp on
   trim(imp.distrito_cresc)=trim(dist.descricao) and
   imp.depto_cresc=dept.id";
        return $sql;
    }

    public function previ_loja_depto() {
        $sql = "left join previsao.previ_loja_depto pd ON   dept.id=pd.depto AND data=CURDATE() AND HOUR(pd.hora)=HOUR(CURTIME())-1  AND pd.loja=lj.loja";
        return $sql;
    }

    public function cresc_regiao_depto() {
        $sql = "LEFT JOIN (SELECT 
   col2 reg_cresc,
   ABS(REPLACE(col3, 'D', '')) dp_cresc,
   IF(HOUR(CURTIME()) >= 10, col4, '') cresc
FROM
   mobile.importCrescimento
WHERE
   col2 LIKE 'GR%' AND col3 LIKE '%D0%') imp on 
   imp.reg_cresc=reg.sigla and imp.dp_cresc=dept.id";
        return $sql;
    }

    public function posicao_regiao() {
        $sql = "LEFT JOIN (SELECT regiao regiao_pos, latitude, longitude FROM dashboard_touch.regiao_posicao) pos on pos.regiao_pos=reg.sigla";
        return $sql;
    }

    public function posicao_distrito() {
        $sql = "LEFT JOIN(SELECT 
   longitude, latitude, distrito
FROM
   dashboard_touch.distrito_posicao)pos on pos.distrito=dist.distritos";
        return $sql;
    }

    public function previ_regiao() {
        $sql = "LEFT OUTER JOIN previsao.previ_regiao pl ON pl.regiao = reg.sigla AND data=CURDATE() AND HOUR(pl.hora)=HOUR(curtime())-1";
        return $sql;
    }

    public function previ_distrito() {
        $sql = "LEFT OUTER JOIN previsao.previ_distrito pl ON pl.distrito = dist.distritos AND data=CURDATE() AND HOUR(pl.hora)=HOUR(curtime())-1";
        return $sql;
    }

    public function previ_depto() {
        $sql = "left join previsao.previ_depto pd ON dept.id = pd.depto AND data = CURDATE()   AND HOUR(pd.hora) = HOUR(CURTIME()) - 1";
        return $sql;
    }

    public function previ_depto_regiao() {
        $sql = "left join previsao.previ_depto_regiao pd  ON reg.sigla=pd.regiao AND data=CURDATE() AND HOUR(pd.hora)=HOUR(CURTIME())-1  AND pd.depto=dept.id";
        return $sql;
    }

    public function previ_gerencia() {
        $sql = "left join previsao.previ_gerencia pd on pd.gerencia=ger.id and data = CURDATE() AND HOUR(pd.hora) = HOUR(CURTIME()) - 1";
        return $sql;
    }

    public function cres_distrito_gerencia() {
        $sql = "LEFT JOIN(SELECT 
   id_gerencia id_gerencia_cres, distritos distritos_cres,col4 cresc
FROM
   lasa.distritos dist
       INNER JOIN
   (SELECT 
       id id_gerencia, col2, col3, col4
   FROM
       lasa.gerencia ger
   INNER JOIN mobile.importCrescimento imp ON ger.descricao = imp.col3
       AND col2 LIKE 'DIS%') r ON dist.descricao = TRIM(SUBSTR(col2, 9, 30)))imp on
       imp.id_gerencia_cres=ger.id and imp.distritos_cres=dist.distritos";
        return $sql;
    }

    public function cresc_gerencia_regiao() {
        $sql = "LEFT JOIN(SELECT 
   id id_gerencia_cres,reg.sigla regiao_cres, IF(HOUR(CURTIME()) >= 10, col4, '') cresc
FROM
   lasa.gerencia ger
       INNER JOIN
   mobile.importCrescimento mimp ON left(ger.descricao,8) = TRIM(left(col3,8))
       INNER JOIN
   lasa.regiao reg ON reg.sigla = TRIM(mimp.col2)) cimp on
   cimp.id_gerencia_cres=ger.id and cimp.regiao_cres=reg.sigla";
        return $sql;
    }

    public function cresc_depto() {
        $sql = "LEFT JOIN(SELECT 
   ABS(REPLACE(col3, 'D', '')) depto_cresc,
   IF(HOUR(CURTIME()) >= 10, col4, '') cresc
FROM
   mobile.importCrescimento
WHERE
   col3 LIKE 'D0%' AND col2 = 'Emp.Loja') imp on 
   imp.depto_cresc=dept.id";
        return $sql;
    }

    public function cresc_gerencia() {
        $sql = "left join (SELECT 
            id,descricao,IF(HOUR(CURTIME()) >= 10, col4, '') cresc
         FROM
            mobile.importCrescimento imp
            inner join lasa.gerencia ger
         on
            col2 = 'Emp.Loja'
                AND left (col3, 8) = left (ger.descricao, 8) ) imp on
                imp.id=ger.id";
        return $sql;
    }

    public function cresc_regiao() {
        $sql = "left join (SELECT 
        col2 cresc_reg,  
        if(hour(curtime())>=10,col4,'') cresc
        FROM `mobile`.`importCrescimento`
        WHERE
                 col3 = 'Grupo.Depto'
                AND col2 LIKE 'GR%') imp on
                imp.cresc_reg=reg.sigla";
        return $sql;
    }

    public function cresc_loja_gerencia() {
        $sql = "left join (SELECT 
   lj.loja loja_cresc, id ger_cresc, col4 cresc
FROM
   lasa.lojas lj
       INNER JOIN
   mobile.importCrescimento imp ON imp.col2 = lj.centro
       INNER JOIN
   lasa.gerencia ger ON ger.descricao = imp.col3) imp on 
   imp.loja_cresc=lj.loja and ger.id=imp.ger_cresc";
        return $sql;
    }

    public function cresc_loja() {
        $sql = "LEFT JOIN(SELECT 
    loja,
    IF(HOUR(CURTIME()) >= 10, col4, '') cresc
    FROM mobile.importCrescimento cl left join
    lasa.lojas lj on lj.centro=cl.col2
    where col3='Grupo.Depto')imp on imp.loja=lj.loja";
        return $sql;
    }

    public function cresc_distrito() {
        $sql = "LEFT JOIN(SELECT 
   TRIM(SUBSTR(col2, 9, 30)) desc_dist_cresc, IF(HOUR(CURTIME()) >= 10, col4, '') cresc
FROM
   mobile.importCrescimento
WHERE
   col2 LIKE 'DIS%'
       AND col3 = 'Grupo.Depto') imp on imp.desc_dist_cresc=dist.descricao";
        return $sql;
    }

    public function dadosCompanhiaDao($data) {
        if($data != ''){
      $res = explode("/", $data);
      $data = $res[2]."-".$res[1]."-".$res[0];
      
            $data_cond = "'".$data."'";
        }else{
            $data_cond = 'curdate()';
        }
        $query = "SELECT *,(prev_valor-orc)desvio,
                         (venda_atual/orc)*100 atingimento from
  (SELECT $data_cond,
     (SELECT SUM(valor) venda
      FROM
        (SELECT SUM(valor) valor
         FROM lasa.flashlojas
         WHERE DATA = $data_cond
         UNION ALL SELECT SUM(depto_tot) valor
         FROM lasa.depto_tot_loja
         WHERE DATA = $data_cond
           AND depto_id = 74) r)venda_atual, IFNULL(
                                                      (SELECT SUM(val_vda_orcado) val
                                                       FROM BI.venda_orcada_dia
                                                       JOIN lasa.lojas l ON BI.venda_orcada_dia.loja = l.loja
                                                       WHERE DATA = $data_cond),0) orc,
     (SELECT venda_prevista
      FROM previsao.previ_cia prev_cia
      WHERE DATA = $data_cond
        AND HOUR(prev_cia.hora) = HOUR(CURTIME()) -1
    limit 1) prev_valor,
     (SELECT atingimento_prev
      FROM previsao.previ_cia prev_cia
      WHERE DATA = $data_cond
        AND HOUR(prev_cia.hora) = HOUR(CURTIME()) -1
    limit 1) prev_perc,
     (SELECT if(hour(curtime())>=10,col4,'') col4
      FROM mobile.importCrescimento
      WHERE col3 = 'Grupo.Depto'
        AND col2 = 'Emp.Loja') crescimento_cia)r;";

        return $this->getResults($query);
    }

    public function climaDao($id_loja) {
        $query = "SELECT  
                    temp_condicoes,
                    p.loja,
                    temp_descricao,
                    temp_max,
                    temp_min,
                    hora_carga,
                    l.cidade,
                    temperatura, CASE  
                    WHEN estado='RJ' THEN '-42.676533'  
                    WHEN estado='SP' THEN '-48.810806' 
                    WHEN estado='PR' THEN '-52.247477'  
                    WHEN estado='GO' THEN '-49.660736'  
                    WHEN estado='MG' THEN '-44.376392' 
                    WHEN estado='RS' THEN '-53.577802'  
                    WHEN estado='BA' THEN '-41.900510' 
                    WHEN estado='MS' THEN '-54.501638'   
                    WHEN estado='ES' THEN '-40.681047' 
                    WHEN estado='AL' THEN '-36.579213'  
                    WHEN estado='PE' THEN '-36.320539' 
                    WHEN estado='CE' THEN '-39.757210'  
                    WHEN estado='SE' THEN '-37.466096' 
                    WHEN estado='RN' THEN '-36.763981'  
                    WHEN estado='MA' THEN '-45.448043' 
                    WHEN estado='SC' THEN '-50.449356'   
                    WHEN estado='PA' THEN '-52.697456' 
                    WHEN estado='DF' THEN '-48.263042'  
                    WHEN estado='PB' THEN '-36.585751' 
                    WHEN estado='MT' THEN '-55.358105'  
                    WHEN estado='PI' THEN '-43.052605' 
                    WHEN estado='RO' THEN '-63.155283' 
                    WHEN estado='TO' THEN '-48.410856'  
                    WHEN estado='AM' THEN '-64.374747' 
                    WHEN estado='RR' THEN '-61.307611'  
                    WHEN estado='AP' THEN '-51.773620' 
                    WHEN estado='AC' THEN '-70.287300'  
                  ELSE longitude END  longitude,
                  CASE
                    WHEN estado='RJ' THEN '-22.088396'
                    WHEN estado='SP' THEN '-21.951364'
                    WHEN estado='PR' THEN '-24.363420' 
                    WHEN estado='GO' THEN '-16.014208'
                    WHEN estado='MG' THEN '-18.764525'  
                    WHEN estado='RS' THEN '-29.661022'
                    WHEN estado='BA' THEN '-12.649233'  
                    WHEN estado='MS' THEN '-20.608482'
                    WHEN estado='ES' THEN '-19.706553'   
                    WHEN estado='AL' THEN '-9.603876'
                    WHEN estado='PE' THEN '-8.436010' 
                    WHEN estado='CE' THEN '-5.207567'
                    WHEN estado='SE' THEN '-10.368136'  
                    WHEN estado='RN' THEN '-5.869620'
                    WHEN estado='MA' THEN '-4.581652'  
                    WHEN estado='SC' THEN '-27.092079'
                    WHEN estado='PA' THEN '-5.079092'   
                    WHEN estado='DF' THEN '-15.747965'
                    WHEN estado='PB' THEN '-8.673873'  
                    WHEN estado='MT' THEN '-13.207823'
                    WHEN estado='PI' THEN '-7.942566'   
                    WHEN estado='RO' THEN '-11.330223'   
                    WHEN estado='TO' THEN '-11.112741'
                    WHEN estado='AM' THEN '-4.379371'   
                    WHEN estado='RR' THEN '2.045825'
                    WHEN estado='AP' THEN '1.233188'   
                    WHEN estado='AC' THEN '-9.184950' 
                  ELSE latitude END  latitude
                   FROM dashboard_touch.loja_posicao p , 
                (select * from lasa.lojas where 
                loja = (select loja from lasa.lojas where cidade like'%RIO%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%SAO P%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%CURIT%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%GOIAN%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%BELO HORIZO%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%SALVAD%' limit 1)   
                or loja = (select loja from lasa.lojas where cidade like'%PORTO ALE%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%CAMPO GR%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%VITORI%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%MACE%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%RECI%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%FORTALE%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%ARACA%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%NATA%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%SAO LUI%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%FLORIANOPOL%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%BELE%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%BRASILI%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%JOAO PESS%' limit 1) 
                or loja = (select loja from lasa.lojas where cidade like'%CUIAB%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%TERESI%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%PORTO VEL%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%PALM%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%MAN%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%BOA VIST%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%MACAP%' limit 1)
                or loja = (select loja from lasa.lojas where cidade like'%RIO BRAN%' limit 1)) l, dashboard_touch.temperatura t
                where p.loja = l.loja
                and t.data = curdate()
                and l.loja = t.loja GROUP BY  t.loja"; 
        return $this->getResults($query); 
    }
    public function posicaoRegDao($data) {
     if($data != ""){
            $res = explode("/", $data);
            $data = $res[2]."-".$res[1]."-".$res[0];      
            $data_cond = " '".$data."'";
        }else{
            $data_cond = ' curdate()'; 
        }
        $query = "select * from   dashboard_touch.regiao_posicao p, dashboard_touch.regiao d 
                    where  p.regiao = d.id_regiao and d.data=$data_cond";
        return $this->getResults($query);
    }

    public function posicaoDisDao($chave, $data) {
        if($data != ""){
            $res = explode("/", $data);
            $data = $res[2]."-".$res[1]."-".$res[0];
            $data_cond = " '".$data."'";
        }else{
            $data_cond = ' curdate()'; 
        }
        $query = "select * from   dashboard_touch.distrito_posicao p, dashboard_touch.distrito d  
                     where p.distrito = d.distrito
                     and p.regiao='$chave'  and d.data= $data_cond";
        return $this->getResults($query);
    }

    public function posicaoLojDao($chave, $data) {
          if($data != ""){
              $res = explode("/", $data);
              $data = $res[2]."-".$res[1]."-".$res[0];
              $data_cond = " '".$data."'";
          }else{
              $data_cond = ' curdate()'; 
          }
        
        $query = "SELECT 
                    *,
                    round((d.venda / d.orcado * 100),2) AS atg,
                    d.previsao_valor - d.orcado AS desvio
                FROM
                    dashboard_touch.loja_posicao_mapa p,
                    dashboard_touch.loja d,
                    dashboard_touch.temperatura t
                WHERE
                    p.loja = d.loja
                    and d.loja = t.loja
                    AND ABS(p.cod_distrito) = ABS($chave)
                   AND d.data = $data_cond
           and t.data = $data_cond";
        
        return $this->getResults($query);
    }

    public function query_dadosDao($data, $nivel_geo, $nivel_com, $chave_geo, $chave_com, $visao, $flag) {
        //COMERCIAL-------------------------------------------------------------------------
        $variavel_previsao = 'previsao';
        if ($visao == 'visao_comercial') {
            if ($nivel_com == "ger") {

                if ($nivel_geo == 'loj') {
                    // gerencia influenciado por uma chave de loja
                    $group_by    = "where 1=1 and lj.loja = '$chave_geo' group by id_gerencia";
                    $crescimento = $this->cresc_loja_gerencia();
                    $isv         = $this->isv_loja_gerencia();
                    $estoque     = $this->estoque_loja_gerencia();
                } else if ($nivel_geo == 'dis') {
                    // gerencia influenciado por uma chave de distrito
                    $group_by    = "where 1=1 and abs(dist.distritos)=abs('$chave_geo') group by id_gerencia";
                    $crescimento = $this->cres_distrito_gerencia();
                    $isv         = $this->isv_distrito_gerencia();
                    $estoque     = $this->estoque_distrito_gerencia();
                } else {
                    //nivel de região -> gerência
                    if ($chave_geo != "") {
                        //influenciado por chave
                        $group_by    = "where 1=1 and reg.sigla='$chave_geo' group by id_gerencia";
                        $crescimento = $this->cresc_gerencia_regiao();
                        $isv         = $this->isv_regiao_gerencia();
                        $estoque     = $this->estoque_regiao_gerencia();
                    } else {
                        //nivel brasil
                        $group_by = "where 1=1 group by id_gerencia";
                        $crescimento    = $this->cresc_gerencia();
                        $estoque        =$this->estoque_gerencia();
                        $isv            =$this->isv_gerencia();
                      

                    }
                }
                //variáveis que valem para os dois  casos
                $descricao  = "desc_gerencia alias_nome";
                $previsao   = $this->previ_gerencia();
                $posicao    = $this->posicao_regiao();
            }


            if ($nivel_com == "dep") {
                if ($nivel_geo == "") { //nivel geografico brasil
                    $group_by    = "where 1=1 and ger.id = '$chave_com' group by dept.id";
                    $descricao   = "concat(depto,' - ',desc_depto) alias_nome";
                    $previsao    = $this->previ_depto();
                    $crescimento = $this->cresc_depto();
                    $posicao     = $this->posicao_regiao();
                    $estoque     = $this->estoque_deptos();
                    $isv         = $this->isv_depto();
                } else {
                    $letra = str_split($nivel_geo);
                    if ($letra[0] == 'G') {  //DEPARTAMENTO x REGIÂO
                        $chave_regiao_existe = '';
                        if ($chave_geo != '') {
                            $chave_regiao_existe = "and reg.sigla = '$chave_geo'";
                        }
                            $group_by    = "where 1=1 $chave_regiao_existe and ger.id = '$chave_com' group by dept.id";
                            $descricao   = "concat(depto,' - ',desc_depto) alias_nome";
                            $previsao    = $this->previ_depto_regiao();
                            $crescimento = $this->cresc_regiao_depto();
                            $isv=$this->isv_regiao_depto();
                            $estoque=$this->estoque_regiao_depto();

                    } else if ($flag == '1') {  //DEPARTAMENTO X LOJA
                        if ($nivel_geo == 'loj') {
                            $group_by    = "where 1=1 and ger.id='$chave_com' and lj.loja = '$chave_geo' group by dept.id";
                            $descricao   = "concat(depto,' - ',desc_depto) alias_nome";
                            $previsao    = $this->previ_loja_depto();
                            $crescimento = $this->cresc_loja_depto();
                            $isv         =$this->isv_loja_depto();
                            $estoque     =$this->estoque_loja_depto();
                        } else {  //DEPARTAMENTO X DISTRITO
                            $group_by    = "where 1=1 and abs(dist.distritos) = abs('$chave_geo') and ger.id = '$chave_com' group by dept.id";
                            $descricao   = "concat(depto,' - ',desc_depto) alias_nome";
                            $previsao    = $this->previ_depto_regiao();
                            $crescimento = $this->cresc_distrito_depto();
                            $isv         =$this->isv_distrito_depto();
                            $estoque     =$this->estoque_distrito_depto();
                        }
                    } else { //DISTRITO x DEPTO
                            $group_by    = "where 1=1 and abs(dist.distritos) = abs('$chave_geo') and ger.id = '$chave_com' group by dept.id";
                            $descricao   = "concat(depto,' - ',desc_depto) alias_nome";
                            $previsao    = $this->previ_depto_regiao();
                            $crescimento = $this->cresc_distrito_depto();
                            $isv         =$this->isv_distrito_depto();
                            $estoque     =$this->estoque_distrito_depto();
                    }


                    $posicao = $this->posicao_regiao();
                    $variavel_previsao = 'previsao_valor';
                }
            }
        } else if ($visao == 'visao_geografica') {
            //GEOGRAFICO-------------------------------------------------------------------------
            if ($nivel_geo == "reg") { //traz a lista de regiões da lateral direita e carrega as regiões do mapa
                $group_by      = "where 1=1 and dept.id not in(select depto_id from lasa.dpto_nao_consolidar) group by reg.sigla";
                $previsao      = $this->previ_regiao();
                $descricao     = "concat(regiao,' - ',nome_regiao)  alias_nome";
                $crescimento   = $this->cresc_regiao();
                $posicao       = $this->posicao_regiao();
                $estoque       = $this->estoque_regiao();
                $isv=$this->isv_regiao();
                if ($nivel_com == 'ger') {
                    $group_by    = "where 1=1 and ger.id='$chave_com' group by reg.sigla";
                    $crescimento = $this->cresc_gerencia_regiao();
                    $isv=$this->isv_regiao_gerencia();
                    $estoque=$this->estoque_regiao_gerencia();

                }
                if ($nivel_com == 'dep') {
                    $group_by          = "where 1=1 and dept.id='$chave_com' group by reg.sigla";
                    $crescimento       = $this->cresc_regiao_depto();
                    $previsao          = $this->previ_depto_regiao();
                    $variavel_previsao = 'previsao_valor';
                    $isv=$this->isv_regiao_depto();
                    $estoque=$this->estoque_regiao_depto();
                }
            }

            if ($nivel_geo == "dis") { //lista distritos
                $group_by    = "where 1=1 and dept.id not in(select depto_id from lasa.dpto_nao_consolidar) and reg.sigla='$chave_geo' group by dist.distritos";
                $previsao    = $this->previ_distrito();
                $descricao   = "concat(distrito,' - ',desc_distrito) alias_nome";
                $crescimento = $this->cresc_distrito();
                $posicao     = $this->posicao_distrito();
                $estoque     = $this->estoque_distrito();
                $isv=$this->isv_distrito();
                if ($nivel_com == 'ger') {
                    $group_by    = "where 1=1 and ger.id='$chave_com' and reg.sigla='$chave_geo' group by dist.distritos";
                    $crescimento = $this->cres_distrito_gerencia();
                    $isv=$this->isv_distrito_gerencia();
                    $estoque=$this->estoque_distrito_gerencia();
                }
                if ($nivel_com == 'dep') {
                    $group_by    = "where 1=1 and dept.id ='$chave_com' and reg.sigla='$chave_geo' group by dist.distritos";
                    $crescimento = $this->cresc_distrito_depto();
                    $isv=$this->isv_distrito_depto();
                    $estoque=$this->estoque_distrito_depto();
                }
            }

            if ($nivel_geo == "loj") { //lista  
                $group_by = "where 1=1 and dept.id not in(select depto_id from lasa.dpto_nao_consolidar) "
                        . "and abs(dist.distritos) = abs('$chave_geo') group by lj.loja";
                $previsao       = $this->previ_loja();
                $descricao      = "concat(centro,' - ',nome_loja) alias_nome";
                $crescimento    = $this->cresc_loja();
                $posicao        = $this->posicao_distrito();
                $estoque        =$this->estoque_loja();
                $isv=$this->isv_loja();
                if ($nivel_com == 'ger') {
                    $group_by    = "where 1=1  and ger.id='$chave_com'"."and abs(dist.distritos) = abs('$chave_geo') group by lj.loja";
                    $crescimento = $this->cresc_loja_gerencia();
                    $isv=$this->isv_loja_gerencia();
                    $estoque=$this->estoque_loja_gerencia();
                }
                if ($nivel_com == 'dep') {
          $group_by = "where 1=1  and dept.id='$chave_com'"
                . "and abs(dist.distritos) = abs('$chave_geo') group by lj.loja";
          if($flag == 1){
              $crescimento = $this->cresc_loja_depto();
               $isv=$this->isv_loja_depto();
               $estoque=$this->estoque_loja_depto();
          }else{
              $crescimento = $this->cresc_loja_gerencia();
              $isv=$this->isv_loja_gerencia();
              $estoque=$this->estoque_loja_gerencia();
          }  
            $previsao = $this->previ_loja_depto();
            $variavel_previsao = 'previsao_valor';
                }
            }
        }
        if($data == ''){
            $condicional_data = " DATE_SUB(CURDATE(), INTERVAL 0 DAY) ";
        }else{
      $res = explode("/", $data);
      $data = $res[2]."-".$res[1]."-".$res[0];
      
            $condicional_data = "'".$data."'";
        }
        $query = "select 
                        r.loja, 
                        regiao,
                        nome_regiao,
                        distrito,
                        desc_distrito,
                        r.depto,
                        desc_depto,
                        id_gerencia,
                        $descricao,
                        depto_tot venda,
                        data,
                        orcado,
                        ifnull(round(((depto_tot/orcado)*100),1) ,'--') atg, 
                        IF(HOUR(CURTIME()) >= 10, previsao, 'N/D')previsao,
                        IF(HOUR(CURTIME()) >= 10, round(previsao_perc,1), 'N/D')previsao_perc,
                        if(previsao='N/D','--',(previsao - orcado)) as desvio, 
                        IF(HOUR(CURTIME()) >= 10, round(crescimento,1), 'N/D') crescimento,
                        latitude, 
                        longitude,
                        estoque_valor,
                        valor_isv,
                        ifnull(round((valor_isv*100)/estoque_valor,1),0)perc_estoque
                     from
                        (select 
                               lj.loja,
                               lj.nome nome_loja, 
                               lj.centro,
                               lj.regiao,
                               reg.nome nome_regiao,
                               lj.distrito,
                               dist.descricao desc_distrito,
                               lj.cod_estado,
                               lj.cidade,
                               o.depto,
                               dept.descricao_txt desc_depto,
                               ger.id id_gerencia, 
                               ger.descricao desc_gerencia,
                               ifnull(sum(depto_tot),0)+ifnull(sum(pcotot),0) depto_tot,
                               sum(orcado) orcado,
                               $condicional_data data,
                               -- REPLACE ($variavel_previsao, '9999999.99', 'N/D') previsao,
                               -- REPLACE (previsao_perc, '9999999.99', 'N/D') previsao_perc,

                               REPLACE (ifnull($variavel_previsao,'N/D'), '9999999.99', 'N/D') previsao,
                               REPLACE (ifnull(previsao_perc,'N/D'), '9999999.99', 'N/D') previsao_perc,
                               ifnull(cresc,'--') crescimento, 
                               latitude, 
                               longitude,
                               ifnull(estoque_valor,0)estoque_valor,
                               ifnull(valor_isv,0)valor_isv
                             from 
                                lasa.lojas lj
                             LEFT JOIN
                                  (  
                                     SELECT  loja, val_vda_orcado orcado, depto FROM BI.venda_orcada_dia WHERE data = $condicional_data
                                     UNION ALL
                                     SELECT loja,orcado, 77 depto FROM  BI.orcado77 where data=$condicional_data
                                     UNION ALL 
                                     SELECT loja,orcado, 71 depto FROM  BI.orcado71 where data=$condicional_data
                   UNION ALL 
                                     SELECT loja,0 orcado, 57 depto FROM  BI.orcado71 where data=$condicional_data
                                     UNION ALL 
                                     SELECT loja,orcado, 99 depto FROM  BI.orcado99 where data=$condicional_data
                                     UNION ALL 
                                     SELECT loja,orcado, 52 depto FROM  BI.orcado52 where data=date_sub(CURDATE(),interval 0 day)
                                     UNION ALL 
                                     SELECT loja,orcado, 53 depto FROM  BI.orcado53 where data=$condicional_data) o on lj.loja=o.loja
                             LEFT JOIN
                                     (SELECT loja, sum(depto_tot) depto_tot,depto_id FROM lasa.depto_tot_loja WHERE data = $condicional_data 
                                      GROUP BY loja,depto_id) dp ON 
                                     dp.loja = lj.loja
                                     and o.depto=dp.depto_id
                                     LEFT JOIN
                                     (SELECT loja, SUM(pcotot) pcotot,98 depto FROM lasa.vendas_vale_presente WHERE data = $condicional_data 
                                     GROUP BY loja) vp on vp.loja=lj.loja and o.depto=vp.depto
                             LEFT JOIN
                             lasa.regiao reg on
                             reg.sigla=lj.regiao
                             LEFT JOIN
                             lasa.distritos dist on
                             dist.distritos=lj.distrito
                             LEFT JOIN
                             lasa.departamentos dept on
                             dept.id=o.depto
                             left join lasa.gerencia ger on
                             ger.id=dept.gerencia 
                             $previsao
                             $posicao    
                             $crescimento
                             $estoque
                             $isv
                             $group_by 
                           )r   where    r.loja not in(998,997) ";
                      //echo $query;die();
        return $this->getResults($query);
    }

}
