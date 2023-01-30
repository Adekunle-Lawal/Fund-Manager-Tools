<?php 
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    // Include configuration file
    include_once '../config.php';

    // SAVE USER INPUT
    if(isset($_POST['submit'])) {

        // Company
        $company_name = $_POST['company'];
        
        // TurnOver
        $to1 = $_POST['to1'];
        $to2 = $_POST['to2'];
        $to3 = $_POST['to3'];
        $to4 = $_POST['to4'];
        $to5 = $_POST['to5'];

        $turn_over = [
            "to1" => $to1,
            "to2" => $to2,
            "to3" => $to3,
            "to4" => $to4,
            "to5" => $to5,
        ];
        $turn_over_encode = json_encode($turn_over);

        // Pretax Profit
        $ptp1 = $_POST['ptp1'];
        $ptp2 = $_POST['ptp2'];
        $ptp3 = $_POST['ptp3'];
        $ptp4 = $_POST['ptp4'];
        $ptp5 = $_POST['ptp5'];

        $pre_tax_pro = [
            "ptp1" => $ptp1,
            "ptp2" => $ptp2,
            "ptp3" => $ptp3,
            "ptp4" => $ptp4,
            "ptp5" => $ptp5,
        ];
        $pre_tax_pro_encode = json_encode($pre_tax_pro);

        // Investment Assets
        $invest_ass1 = $_POST['invest_ass1'];
        $invest_ass2 = $_POST['invest_ass2'];
        $invest_ass3 = $_POST['invest_ass3'];
        $invest_ass4 = $_POST['invest_ass4'];
        $invest_ass5 = $_POST['invest_ass5'];

        $investment_asset = [
            "invest_ass1" => $invest_ass1,
            "invest_ass2" => $invest_ass2,
            "invest_ass3" => $invest_ass3,
            "invest_ass4" => $invest_ass4,
            "invest_ass5" => $invest_ass5,
        ];
        $investment_asset_encode = json_encode($investment_asset);

        // FAsset 
        $fa1 = $_POST['fa1'];
        $fa2 = $_POST['fa2'];
        $fa3 = $_POST['fa3'];
        $fa4 = $_POST['fa4'];
        $fa5 = $_POST['fa5'];

        $f_asset = [
            "fa1" => $fa1,
            "fa2" => $fa2,
            "fa3" => $fa3,
            "fa4" => $fa4,
            "fa5" => $fa5,
        ];
        $f_asset_encode = json_encode($f_asset);

        // TAsset
        $ta1 = $_POST['ta1'];
        $ta2 = $_POST['ta2'];
        $ta3 = $_POST['ta3'];
        $ta4 = $_POST['ta4'];
        $ta5 = $_POST['ta5'];

        $t_asset = [
            "ta1" => $ta1,
            "ta2" => $ta2,
            "ta3" => $ta3,
            "ta4" => $ta4,
            "ta5" => $ta5,
        ];
        $t_asset_encode = json_encode($t_asset);

        // Liquid Assets
        $liq_ass1 = $_POST['liq_ass1'];
        $liq_ass2 = $_POST['liq_ass2'];
        $liq_ass3 = $_POST['liq_ass3'];
        $liq_ass4 = $_POST['liq_ass4'];
        $liq_ass5 = $_POST['liq_ass5'];

        $liquid_asset = [
            "liq_ass1" => $liq_ass1,
            "liq_ass2" => $liq_ass2,
            "liq_ass3" => $liq_ass3,
            "liq_ass4" => $liq_ass4,
            "liq_ass5" => $liq_ass5,
        ];
        $liquid_asset_encode = json_encode($liquid_asset);

        // Investment Income
        $invest_income1 = $_POST['invest_income1'];
        $invest_income2 = $_POST['invest_income2'];
        $invest_income3 = $_POST['invest_income3'];
        $invest_income4 = $_POST['invest_income4'];
        $invest_income5 = $_POST['invest_income5'];

        $invest_income = [
            "invest_income1" => $invest_income1,
            "invest_income2" => $invest_income2,
            "invest_income3" => $invest_income3,
            "invest_income4" => $invest_income4,
            "invest_income5" => $invest_income5,
        ];
        $invest_income_encode = json_encode($invest_income);

        // Equity
        $eqty1 = $_POST['eqty1'];
        $eqty2 = $_POST['eqty2'];
        $eqty3 = $_POST['eqty3'];
        $eqty4 = $_POST['eqty4'];
        $eqty5 = $_POST['eqty5'];

        $eqty = [
            "eqty1" => $eqty1,
            "eqty2" => $eqty2,
            "eqty3" => $eqty3,
            "eqty4" => $eqty4,
            "eqty5" => $eqty5,
        ];
        $eqty_encode = json_encode($eqty);

        // Anum
        $anum1 = $_POST['anum1'];
        $anum2 = $_POST['anum2'];
        $anum3 = $_POST['anum3'];
        $anum4 = $_POST['anum4'];
        $anum5 = $_POST['anum5'];

        $anum = [
            "anum1" => $anum1,
            "anum2" => $anum2,
            "anum3" => $anum3,
            "anum4" => $anum4,
            "anum5" => $anum5,
        ];
        $anum_encode = json_encode($anum);

        // FIN-Ass
        $fin_ass1 = $_POST['fin_ass1'];
        $fin_ass2 = $_POST['fin_ass2'];
        $fin_ass3 = $_POST['fin_ass3'];
        $fin_ass4 = $_POST['fin_ass4'];
        $fin_ass5 = $_POST['fin_ass5'];

        $fin_ass = [
            "fin_ass1" => $fin_ass1,
            "fin_ass2" => $fin_ass2,
            "fin_ass3" => $fin_ass3,
            "fin_ass4" => $fin_ass4,
            "fin_ass5" => $fin_ass5,
        ];
        $fin_ass_encode = json_encode($fin_ass);

        // FFO
        $ffo1 = $_POST['ffo1'];
        $ffo2 = $_POST['ffo2'];
        $ffo3 = $_POST['ffo3'];
        $ffo4 = $_POST['ffo4'];
        $ffo5 = $_POST['ffo5'];

        $ffo = [
            "ffo1" => $ffo1,
            "ffo2" => $ffo2,
            "ffo3" => $ffo3,
            "ffo4" => $ffo4,
            "ffo5" => $ffo5,
        ];
        $ffo_encode = json_encode($ffo);

        // Finance Cost
        $fc1 = $_POST['fc1'];
        $fc2 = $_POST['fc2'];
        $fc3 = $_POST['fc3'];
        $fc4 = $_POST['fc4'];
        $fc5 = $_POST['fc5'];

        $finance_cost = [
            "fc1" => $fc1,
            "fc2" => $fc2,
            "fc3" => $fc3,
            "fc4" => $fc4,
            "fc5" => $fc5,
        ];
        $finance_cost_encode = json_encode($finance_cost);

        // AddFix
        $ad1 = $_POST['ad1'];
        $ad2 = $_POST['ad2'];
        $ad3 = $_POST['ad3'];
        $ad4 = $_POST['ad4'];
        $ad5 = $_POST['ad5'];

        $add_fix = [
            "ad1" => $ad1,
            "ad2" => $ad2,
            "ad3" => $ad3,
            "ad4" => $ad4,
            "ad5" => $ad5,
        ];
        $add_fix_encode = json_encode($add_fix);

        // Dep
        $dep1 = $_POST['dep1'];
        $dep2 = $_POST['dep2'];
        $dep3 = $_POST['dep3'];
        $dep4 = $_POST['dep4'];
        $dep5 = $_POST['dep5'];

        $dep = [
            "dep1" => $dep1,
            "dep2" => $dep2,
            "dep3" => $dep3,
            "dep4" => $dep4,
            "dep5" => $dep5,
        ];
        $dep_encode = json_encode($dep);
    
        // ----------------------------------BEGIN INSERTING "COMPUTED VALUES"--------------------------
        //  Non Investment Asset
        $nia1 = $_POST['nia1'];
        $nia2 = $_POST['nia2'];
        $nia3 = $_POST['nia3'];
        $nia4 = $_POST['nia4'];
        $nia5 = $_POST['nia5'];

        $nia = [
            "nia1" => $nia1,
            "nia2" => $nia2,
            "nia3" => $nia3,
            "nia4" => $nia4,
            "nia5" => $nia5,
        ];
        $nia_encode = json_encode($nia);

        // Net Liquid
        $nld1 = $_POST['nld1'];
        $nld2 = $_POST['nld2'];
        $nld3 = $_POST['nld3'];
        $nld4 = $_POST['nld4'];
        $nld5 = $_POST['nld5'];

        $nld = [
            "nld1" => $nld1,
            "nld2" => $nld2,
            "nld3" => $nld3,
            "nld4" => $nld4,
            "nld5" => $nld5,
        ];
        $nld_encode = json_encode($nld);

        // Total Liabilities
        $tol1 = $_POST['tol1'];
        $tol2 = $_POST['tol2'];
        $tol3 = $_POST['tol3'];
        $tol4 = $_POST['tol4'];
        $tol5 = $_POST['tol5'];

        $tol = [
            "tol1" => $tol1,
            "tol2" => $tol2,
            "tol3" => $tol3,
            "tol4" => $tol4,
            "tol5" => $tol5,
        ];
        $tol_encode = json_encode($tol);

        // Net Liabs
        $ntl1 = $_POST['ntl1'];
        $ntl2 = $_POST['ntl2'];
        $ntl3 = $_POST['ntl3'];
        $ntl4 = $_POST['ntl4'];
        $ntl5 = $_POST['ntl5'];

        $ntl = [
            "ntl1" => $ntl1,
            "ntl2" => $ntl2,
            "ntl3" => $ntl3,
            "ntl4" => $ntl4,
            "ntl5" => $ntl5,
        ];
        $ntl_encode = json_encode($ntl);

        // Asset Quality
        $aql1 = $_POST['aql1'];
        $aql2 = $_POST['aql2'];
        $aql3 = $_POST['aql3'];
        $aql4 = $_POST['aql4'];
        $aql5 = $_POST['aql5'];

        $aql = [
            "aql1" => $aql1,
            "aql2" => $aql2,
            "aql3" => $aql3,
            "aql4" => $aql4,
            "aql5" => $aql5,
        ];
        $aql_encode = json_encode($aql);

        // FOC 
        $foc1 = $_POST['foc1'];
        $foc2 = $_POST['foc2'];
        $foc3 = $_POST['foc3'];
        $foc4 = $_POST['foc4'];
        $foc5 = $_POST['foc5'];

        $foc = [
            "foc1" => $foc1,
            "foc2" => $foc2,
            "foc3" => $foc3,
            "foc4" => $foc4,
            "foc5" => $foc5,
        ];
        $foc_encode = json_encode($foc);

        // Total Debt
        $total_debt1 = $_POST['td1'];
        $total_debt2 = $_POST['td2'];
        $total_debt3 = $_POST['td3'];
        $total_debt4 = $_POST['td4'];
        $total_debt5 = $_POST['td5'];

        $total_debt = [
            "td1" => $total_debt1,
            "td2" => $total_debt2,
            "td3" => $total_debt3,
            "td4" => $total_debt4,
            "td5" => $total_debt5,
        ];
        $total_debt_encode = json_encode($total_debt);

        // Ebitda
        $ebitda1 = $_POST['ebitda1'];
        $ebitda2 = $_POST['ebitda2'];
        $ebitda3 = $_POST['ebitda3'];
        $ebitda4 = $_POST['ebitda4'];
        $ebitda5 = $_POST['ebitda5'];

        $ebitda = [
            "ebitda1" => $ebitda1,
            "ebitda2" => $ebitda2,
            "ebitda3" => $ebitda3,
            "ebitda4" => $ebitda4,
            "ebitda5" => $ebitda5,
        ];
        $ebitda_encode = json_encode($ebitda);

        // TD/K
        $tdk_1 = $_POST['tdk_1'];
        // $tdk_2 = $_POST['tdk_2'];
        // $tdk_3 = $_POST['tdk_3'];
        // $tdk_4 = $_POST['tdk_4'];
        // $tdk_5 = $_POST['tdk_5'];

        $tdk = [
            "tdk_1" => $tdk_1,
            // "tdk_2" => $tdk_2,
            // "tdk_3" => $tdk_3,
            // "tdk_4" => $tdk_4,
            // "tdk_5" => $tdk_5,
        ];
        $tdk_encode = json_encode($tdk);

        // FFO/TD
        $ffo_td_1 = $_POST['ffo_td_1'];
        // $ffo_td_2 = $_POST['ffo_td_2'];
        // $ffo_td_3 = $_POST['ffo_td_3'];
        // $ffo_td_4 = $_POST['ffo_td_4'];
        // $ffo_td_5 = $_POST['ffo_td_5'];

        $ffo_td = [
            "ffo_td_1" => $ffo_td_1,
            // "ffo_td_2" => $ffo_td_2,
            // "ffo_td_3" => $ffo_td_3,
            // "ffo_td_4" => $ffo_td_4,
            // "ffo_td_5" => $ffo_td_5,
        ];
        $ffo_td_encode = json_encode($ffo_td);

        // FOC/TD
        $foc_td_1 = $_POST['foc_td_1'];
        // $foc_td_2 = $_POST['foc_td_1'];
        // $foc_td_3 = $_POST['foc_td_1'];
        // $foc_td_4 = $_POST['foc_td_1'];
        // $foc_td_5 = $_POST['foc_td_1'];

        $foc_td = [
            "foc_td_1" => $foc_td_1,
            // "foc_td_2" => $ffo_td_2,
            // "foc_td_3" => $ffo_td_3,
            // "foc_td_4" => $ffo_td_4,
            // "foc_td_5" => $ffo_td_5,
        ];
        $foc_td_encode = json_encode($foc_td);

        // EBITDA/INT.COV
        $ebitda_int_1 = $_POST['ebitda_int_1'];
        // $ebitda_int_2 = $_POST['ebitda_int_2'];
        // $ebitda_int_3 = $_POST['ebitda_int_3'];
        // $ebitda_int_4 = $_POST['ebitda_int_4'];
        // $ebitda_int_5 = $_POST['ebitda_int_5'];

        $ebitda_int = [
            "ebitda_int_1" => $ebitda_int_1,
            // "ebitda_int_2" => $ebitda_int_2,
            // "ebitda_int_3" => $ebitda_int_3,
            // "ebitda_int_4" => $ebitda_int_4,
            // "ebitda_int_5" => $ebitda_int_5,
        ];
        $ebitda_int_encode = json_encode($ebitda_int);

        // ----------------------------------END INSERTING "COMPUTED VALUES"-------------------------- //

        // ----------------------------------BEGIN INSERTING "QUANTITATIVES VALUES"--------------------------
        // Liq-ass/Tot-ass
        $Lqr1 = $_POST['Lqr1'];
        $Lqr2 = $_POST['Lqr2'];
        $Lqr3 = $_POST['Lqr3'];
        $Lqr4 = $_POST['Lqr4'];
        $Lqr5 = $_POST['Lqr5'];
        $Lqr_3yrs = $_POST['3yt_Lqr'];
        $Lqr_5yrs = $_POST['5yt_Lqr'];
        $l30 = $_POST['l30'];


        $Lqr = [
            "Lqr1" => $Lqr1,
            "Lqr2" => $Lqr2,
            "Lqr3" => $Lqr3,
            "Lqr4" => $Lqr4,
            "Lqr5" => $Lqr5,
            "3yt_Lqr" => $Lqr_3yrs,
            "5yt_Lqr" => $Lqr_5yrs,
            "l30" => $l30,
        ];
        $Lqr_encode = json_encode($Lqr);

        // Inv / Aum
        $Inv1 = $_POST['Inv1'];
        $Inv2 = $_POST['Inv2'];
        $Inv3 = $_POST['Inv3'];
        $Inv4 = $_POST['Inv4'];
        $Inv5 = $_POST['Inv5'];
        $Inv_3yrs = $_POST['3yt_Inv'];
        $Inv_5yrs = $_POST['5yt_Inv'];
        $l31 = $_POST['l31'];

    
        $Inv = [
            "Inv1" => $Inv1,
            "Inv2" => $Inv2,
            "Inv3" => $Inv3,
            "Inv4" => $Inv4,
            "Inv5" => $Inv5,
            "3yt_Inv" => $Inv_3yrs,
            "5yt_Inv" => $Inv_5yrs,
            "l31" => $l31,

        ];
        $Inv_encode = json_encode($Inv);

        // Net-liqui-ass / Net-liabs
        $nla_n1 = $_POST['nla_n1'];
        $nla_n2 = $_POST['nla_n2'];
        $nla_n3 = $_POST['nla_n3'];
        $nla_n4 = $_POST['nla_n4'];
        $nla_n5 = $_POST['nla_n5'];
        $nla_n_3yrs = $_POST['3yt_nla_n'];
        $nla_n_5yrs = $_POST['5yt_nla_n'];
        $l32 = $_POST['l32'];

        $nla_n = [
            "nla_n1" => $nla_n1,
            "nla_n2" => $nla_n2,
            "nla_n3" => $nla_n3,
            "nla_n4" => $nla_n4,
            "nla_n5" => $nla_n5,
            "3yt_nla_n" => $nla_n_3yrs,
            "5yt_nla_n" => $nla_n_5yrs,
            "l32" => $l32,
        ];

        $nla_n_encode = json_encode($nla_n);

        // Inv / Ass
        $Inv_ass1 = $_POST['Inv_ass1'];
        $Inv_ass2 = $_POST['Inv_ass2'];
        $Inv_ass3 = $_POST['Inv_ass3'];
        $Inv_ass4 = $_POST['Inv_ass4'];
        $Inv_ass5 = $_POST['Inv_ass5'];
        $Inv_ass_3yrs = $_POST['3yt_Inv_ass'];
        $Inv_ass_5yrs = $_POST['5yt_Inv_ass'];
        $l33 = $_POST['l33'];

        $Inv_ass = [
            "Inv_ass1" => $Inv_ass1,
            "Inv_ass2" => $Inv_ass2,
            "Inv_ass3" => $Inv_ass3,
            "Inv_ass4" => $Inv_ass4,
            "Inv_ass5" => $Inv_ass5,
            "3yt_Inv_ass" => $Inv_ass_3yrs,
            "5yt_Inv_ass" => $Inv_ass_5yrs,
            "l33" => $l33,

        ];
        $Inv_ass_encode = json_encode($Inv_ass);

        // PM
        $pm1 = $_POST['pm1'];
        $pm2 = $_POST['pm2'];
        $pm3 = $_POST['pm3'];
        $pm4 = $_POST['pm4'];
        $pm5 = $_POST['pm5'];
        $pm_3yrs = $_POST['3yt_pm'];
        $pm_5yrs = $_POST['5yt_pm'];
        $l34 = $_POST['l34'];


        $pm = [
            "pm1" => $pm1,
            "pm2" => $pm2,
            "pm3" => $pm3,
            "pm4" => $pm4,
            "pm5" => $pm5,
            "3yt_pm" => $pm_3yrs,
            "5yt_pm" => $pm_5yrs,
            "l34" => $l34,

        ];
        $pm_encode = json_encode($pm);

        // SR
        $sr1 = $_POST['sr1'];
        $sr2 = $_POST['sr2'];
        $sr3 = $_POST['sr3'];
        $sr4 = $_POST['sr4'];
        $sr5 = $_POST['sr5'];
        $sr_3yrs = $_POST['3yt_sr'];
        $sr_5yrs = $_POST['5yt_sr'];
        $l35 = $_POST['l35'];


        $sr = [
            "sr1" => $sr1,
            "sr2" => $sr2,
            "sr3" => $sr3,
            "sr4" => $sr4,
            "sr5" => $sr5,
            "3yt_sr" => $sr_3yrs,
            "5yt_sr" => $sr_5yrs,
            "l35" => $l35,

        ];
        $sr_encode = json_encode($sr);

        // ROI
        $roi1 = $_POST['roi1'];
        $roi2 = $_POST['roi2'];
        $roi3 = $_POST['roi3'];
        $roi4 = $_POST['roi4'];
        $roi5 = $_POST['roi5'];
        $roi_3yrs = $_POST['3yt_roi'];
        $roi_5yrs = $_POST['5yt_roi'];
        $l36 = $_POST['l36'];

        $roi = [
            "roi1" => $roi1,
            "roi2" => $roi2,
            "roi3" => $roi3,
            "roi4" => $roi4,
            "roi5" => $roi5,
            "3yt_roi" => $roi_3yrs,
            "5yt_roi" => $roi_5yrs,
            "l36" => $l36,

        ];
        $roi_encode = json_encode($roi);

        // NW/TA
        $nw_ta1 = $_POST['nw_ta1'];
        $nw_ta2 = $_POST['nw_ta2'];
        $nw_ta3 = $_POST['nw_ta3'];
        $nw_ta4 = $_POST['nw_ta4'];
        $nw_ta5 = $_POST['nw_ta5'];
        // $nw_ta_3yrs = $_POST['3yt_nw_ta'];
        // $nw_ta_5yrs = $_POST['5yt_nw_ta'];
        // $l30 = $_POST['l30'];


        $nw_ta = [
            "nw_ta1" => $nw_ta1,
            "nw_ta2" => $nw_ta2,
            "nw_ta3" => $nw_ta3,
            "nw_ta4" => $nw_ta4,
            "nw_ta5" => $nw_ta5,
            // "3yt_nw_ta" => $nw_ta_3yrs,
            // "5yt_nw_ta" => $nw_ta_5yrs,
            // "l30" => $l30,

        ];
        $nw_ta_encode = json_encode($nw_ta);

        // Regulatory
        $regulat1 = $_POST['regulat1'];
        $regulat2 = $_POST['regulat2'];
        $regulat3 = $_POST['regulat3'];
        $regulat4 = $_POST['regulat4'];
        $regulat5 = $_POST['regulat5'];
        // $regulat_3yrs = $_POST['3yt_regulat'];
        // $regulat_5yrs = $_POST['5yt_regulat'];
        // $l30 = $_POST['l30'];

        $regulat = [
            "regulat1" => $regulat1,
            "regulat2" => $regulat2,
            "regulat3" => $regulat3,
            "regulat4" => $regulat4,
            "regulat5" => $regulat5,
            // "3yt_regulat" => $regulat_3yrs,
            // "5yt_regulat" => $regulat_5yrs,
            // "l30" => $l30,

        ];
        $regulat_encode = json_encode($regulat);

        // // REQ CAP
        // $req_cap1 = $_POST['req_cap1'];
        // $req_cap2 = $_POST['req_cap2'];
        // $req_cap3 = $_POST['req_cap3'];
        // $req_cap4 = $_POST['req_cap4'];
        // $req_cap5 = $_POST['req_cap5'];
        // $req_cap_3yrs = $_POST['3yt_req_cap'];
        // $req_cap_5yrs = $_POST['5yt_req_cap'];
        // $l30 = $_POST['l30'];

        // $req_cap = [
        //     "req_cap1" => $req_cap1,
        //     "req_cap2" => $req_cap2,
        //     "req_cap3" => $req_cap3,
        //     "req_cap4" => $req_cap4,
        //     "req_cap5" => $req_cap5,
        //     "3yt_req_cap" => $req_cap_3yrs,
        //     "5yt_req_cap" => $req_cap_5yrs,
        //     "l30" => $l30,

        // ];
        // $req_cap_encode = json_encode($req_cap);
        // ----------------------------------END INSERTING "QUANTITATIVES VALUES"----------------------------

        // ----------------------------------BEGIN INSERTING "TREND ANALYSIS VALUES"--------------------------
        // TurnOver TA
        $t_over1 = $_POST['turn_over1'];
        $t_over2 = $_POST['turn_over2'];
        $t_over3 = $_POST['turn_over3'];
        $t_over4 = $_POST['turn_over4'];
        $t_over5 = $_POST['turn_over5'];
        $t_over_3yrs = $_POST['3yt_turn_over'];
        $t_over_5yrs = $_POST['5yt_turn_over'];
        $l43 = $_POST['l43'];


        $t_over = [
            "turn_over1" => $t_over1,
            "turn_over2" => $t_over2,
            "turn_over3" => $t_over3,
            "turn_over4" => $t_over4,
            "turn_over5" => $t_over5,
            "3yt_turn_over" => $t_over_3yrs,
            "5yt_turn_over" => $t_over_5yrs,
            "l43" => $l43,

        ];
        $t_over_encode = json_encode($t_over);

        // Pretax Profit
        $pre_pro1 = $_POST['pre_pro1'];
        $pre_pro2 = $_POST['pre_pro2'];
        $pre_pro3 = $_POST['pre_pro3'];
        $pre_pro4 = $_POST['pre_pro4'];
        $pre_pro5 = $_POST['pre_pro5'];
        $pre_pro_3yrs = $_POST['3yt_pre_pro'];
        $pre_pro_5yrs = $_POST['5yt_pre_pro'];
        $l44 = $_POST['l44'];

        $pre_pro = [
            "pre_pro1" => $pre_pro1,
            "pre_pro2" => $pre_pro2,
            "pre_pro3" => $pre_pro3,
            "pre_pro4" => $pre_pro4,
            "pre_pro5" => $pre_pro5,
            "3yt_pre_pro" => $pre_pro_3yrs,
            "5yt_pre_pro" => $pre_pro_5yrs,
            "l44" => $l44,

        ];
        $pre_pro_encode = json_encode($pre_pro);

        // Fixed Asset
        $f_asset1 = $_POST['f_asset1'];
        $f_asset2 = $_POST['f_asset2'];
        $f_asset3 = $_POST['f_asset3'];
        $f_asset4 = $_POST['f_asset4'];
        $f_asset5 = $_POST['f_asset5'];
        $f_asset_3yrs = $_POST['3yt_f_asset'];
        $f_asset_5yrs = $_POST['5yt_f_asset'];
        $l45 = $_POST['l45'];


        $fixed_asset = [
            "f_asset1" => $f_asset1,
            "f_asset2" => $f_asset2,
            "f_asset3" => $f_asset3,
            "f_asset4" => $f_asset4,
            "f_asset5" => $f_asset5,
            "3yt_f_asset" => $f_asset_3yrs,
            "5yt_f_asset" => $f_asset_5yrs,
            "l45" => $l45,

        ];
        $fixed_asset_encode = json_encode($fixed_asset);

        // Total Asset
        $t_asset1 = $_POST['t_asset1'];
        $t_asset2 = $_POST['t_asset2'];
        $t_asset3 = $_POST['t_asset3'];
        $t_asset4 = $_POST['t_asset4'];
        $t_asset5 = $_POST['t_asset5'];
        $t_asset_3yrs = $_POST['3yt_t_asset'];
        $t_asset5_5yrs = $_POST['5yt_t_asset'];
        $l46 = $_POST['l46'];


        $total_asset = [
            "t_asset1" => $t_asset1,
            "t_asset2" => $t_asset2,
            "t_asset3" => $t_asset3,
            "t_asset4" => $t_asset4,
            "t_asset5" => $t_asset5,
            "3yt_t_asset" => $t_asset_3yrs,
            "5yt_t_asset" => $t_asset5_5yrs,
            "l46" => $l46,

        ];
        $total_asset_encode = json_encode($total_asset);

        // Investment Assets
        $inv_asset1 = $_POST['inv_asset1'];
        $inv_asset2 = $_POST['inv_asset2'];
        $inv_asset3 = $_POST['inv_asset3'];
        $inv_asset4 = $_POST['inv_asset4'];
        $inv_asset5 = $_POST['inv_asset5'];
        $inv_asset_3yrs = $_POST['3yt_inv_asset'];
        $inv_asset_5yrs = $_POST['5yt_inv_asset'];
        $l47 = $_POST['l47'];

        $inv_asset = [
            "inv_asset1" => $inv_asset1,
            "inv_asset2" => $inv_asset2,
            "inv_asset3" => $inv_asset3,
            "inv_asset4" => $inv_asset4,
            "inv_asset5" => $inv_asset5,
            "3yt_inv_asset" => $inv_asset_3yrs,
            "5yt_inv_asset" => $inv_asset_5yrs,
            "l47" => $l47,

        ];
        $inv_asset_encode = json_encode($inv_asset);

        // Equity
        $equit1 = $_POST['equit1'];
        $equit2 = $_POST['equit2'];
        $equit3 = $_POST['equit3'];
        $equit4 = $_POST['equit4'];
        $equit5 = $_POST['equit5'];
        $equit_3yrs = $_POST['3yt_equit'];
        $equit_5yrs = $_POST['5yt_equit'];
        $l48 = $_POST['l48'];

        $equit = [
            "equit1" => $equit1,
            "equit2" => $equit2,
            "equit3" => $equit3,
            "equit4" => $equit4,
            "equit5" => $equit5,
            "3yt_equit" => $equit_3yrs,
            "5yt_equit" => $equit_5yrs,
            "l48" => $l48,

        ];
        $equit_encode = json_encode($equit);

        // Anum
        $an1 = $_POST['an1'];
        $an2 = $_POST['an2'];
        $an3 = $_POST['an3'];
        $an4 = $_POST['an4'];
        $an5 = $_POST['an5'];
        $an_3yrs = $_POST['3yt_an'];
        $an_5yrs = $_POST['5yt_an'];
        $l49 = $_POST['l49'];

        $an = [
            "an1" => $an1,
            "an2" => $an2,
            "an3" => $an3,
            "an4" => $an4,
            "an5" => $an5,
            "3yt_an" => $an_3yrs,
            "5yt_an" => $an_5yrs,
            "l49" => $l49,

        ];
        $an_encode = json_encode($an);

        // Investment Income
        $int_inc1 = $_POST['int_inc1'];
        $int_inc2 = $_POST['int_inc2'];
        $int_inc3 = $_POST['int_inc3'];
        $int_inc4 = $_POST['int_inc4'];
        $int_inc5 = $_POST['int_inc5'];
        $int_inc_3yrs = $_POST['3yt_int_inc'];
        $int_inc_5yrs = $_POST['5yt_int_inc'];
        $l50 = $_POST['l50'];

        $int_inc = [
            "int_inc1" => $int_inc1,
            "int_inc2" => $int_inc2,
            "int_inc3" => $int_inc3,
            "int_inc4" => $int_inc4,
            "int_inc5" => $int_inc5,
            "3yt_int_inc" => $int_inc_3yrs,
            "5yt_int_inc" => $int_inc_5yrs,
            "l50" => $l50,

        ];
        $int_inc_encode = json_encode($int_inc);

        // Liquid Assets
        $liq_asset1 = $_POST['liq_asset1'];
        $liq_asset2 = $_POST['liq_asset2'];
        $liq_asset3 = $_POST['liq_asset3'];
        $liq_asset4 = $_POST['liq_asset4'];
        $liq_asset5 = $_POST['liq_asset5'];
        $liq_asset_3yrs = $_POST['3yt_liq_asset'];
        $liq_asset_5yrs = $_POST['5yt_liq_asset'];
        $l51 = $_POST['l51'];

        $liq_asset = [
            "liq_asset1" => $liq_asset1,
            "liq_asset2" => $liq_asset2,
            "liq_asset3" => $liq_asset3,
            "liq_asset4" => $liq_asset4,
            "liq_asset5" => $liq_asset5,
            "3yt_liq_asset" => $liq_asset_3yrs,
            "5yt_liq_asset" => $liq_asset_5yrs,
            "l51" => $l51,
        ];
        $liq_asset_encode = json_encode($liq_asset);

        // Net Liquid
        $net_liq1 = $_POST['net_liq1'];
        $net_liq2 = $_POST['net_liq2'];
        $net_liq3 = $_POST['net_liq3'];
        $net_liq4 = $_POST['net_liq4'];
        $net_liq5 = $_POST['net_liq5'];
        $net_liq_3yrs = $_POST['3yt_net_liq'];
        $net_liq_5yrs = $_POST['5yt_net_liq'];
        $l52 = $_POST['l52'];

        $net_liq = [
            "net_liq1" => $net_liq1,
            "net_liq2" => $net_liq2,
            "net_liq3" => $net_liq3,
            "net_liq4" => $net_liq4,
            "net_liq5" => $net_liq5,
            "3yt_net_liq" => $net_liq_3yrs,
            "5yt_net_liq" => $net_liq_5yrs,
            "l52" => $l52,
        ];
        $net_liq_encode = json_encode($net_liq);

        // Total Liabilities
        $total_liab1 = $_POST['total_liab1'];
        $total_liab2 = $_POST['total_liab2'];
        $total_liab3 = $_POST['total_liab3'];
        $total_liab4 = $_POST['total_liab4'];
        $total_liab5 = $_POST['total_liab5'];
        $total_liab_3yrs = $_POST['3yt_total_liab'];
        $total_liab_5yrs = $_POST['5yt_total_liab'];
        $l53 = $_POST['l53'];


        $total_liab = [
            "total_liab1" => $total_liab1,
            "total_liab2" => $total_liab2,
            "total_liab3" => $total_liab3,
            "total_liab4" => $total_liab4,
            "total_liab5" => $total_liab5,
            "3yt_total_liab" => $total_liab_3yrs,
            "5yt_total_liab" => $total_liab_5yrs,
            "l53" => $l53

        ];
        $total_liab_encode = json_encode($total_liab);

        // Net Liabs
        $net_liab1 = $_POST['net_liab1'];
        $net_liab2 = $_POST['net_liab2'];
        $net_liab3 = $_POST['net_liab3'];
        $net_liab4 = $_POST['net_liab4'];
        $net_liab5 = $_POST['net_liab5'];
        $net_liab_3yrs = $_POST['3yt_net_liab'];
        $net_liab_5yrs = $_POST['5yt_net_liab'];
        $l54 = $_POST['l54'];


        $net_liab = [
            "net_liab1" => $net_liab1,
            "net_liab2" => $net_liab2,
            "net_liab3" => $net_liab3,
            "net_liab4" => $net_liab4,
            "net_liab5" => $net_liab5,
            "3yt_net_liab" => $net_liab_3yrs,
            "5yt_net_liab" => $net_liab_5yrs,
            "l54" => $l54
        ];
        $net_liab_encode = json_encode($net_liab);


        // error to display if invalid number of years is supplied
        function Err($error) {
            // echo '<script type="text/javascript">   
            // window.location.href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/inputs2.php";
            //   window.location.href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/inputs2.php";
            //       </script>';
            die();
        }
        // ----------------------------------END INSERTING "TREND ANALYSIS VALUES"----------------------------

        // check for three years
        if(!empty($_POST['to1']) && !empty($_POST['to2']) && !empty($_POST['to3'])) {
            $query = 
            "INSERT INTO fund_manager_trendanalysis (t_over, pre_pro, fixed_asset, total_asset, inv_asset, equit, an, int_inc, liq_asset, net_liq, total_liab, net_liab, company) 
            VALUES('$t_over_encode', '$pre_pro_encode', '$fixed_asset_encode', '$total_asset_encode', '$inv_asset_encode', '$equit_encode', '$an_encode', '$int_inc_encode', '$liq_asset_encode', '$net_liq_encode', '$total_liab_encode', '$net_liab_encode', '$company_name');
            
            INSERT INTO fund_manager_requirements (turn_over, pre_tax_pro, investment_asset, f_asset, t_asset, liquid_asset, invest_income, eqty, anum, fin_ass, ffo, finance_cost, add_fix, dep, company) 
                VALUES('$turn_over_encode', '$pre_tax_pro_encode', '$investment_asset_encode', '$f_asset_encode', '$t_asset_encode', '$liquid_asset_encode', '$invest_income_encode', '$eqty_encode', '$anum_encode', '$fin_ass_encode', '$ffo_encode', '$finance_cost_encode', '$add_fix_encode', '$dep_encode', '$company_name');
            
            INSERT INTO fund_manager_computes (nia, nld, tol, ntl, aql, foc, total_debt, ebitda, tdk, ffo_td, foc_td, ebitda_int, company) 
            VALUES('$nia_encode', '$nld_encode', '$tol_encode', '$ntl_encode', '$aql_encode', '$foc_encode', '$total_debt_encode', '$ebitda_encode', '$tdk_encode', '$ffo_td_encode', '$foc_td_encode', '$ebitda_int_encode', '$company_name');

            INSERT INTO fund_manager_quantities (Lqr, Inv, nla_n, Inv_ass, pm, sr, roi, nw_ta, regulat, company) 
                VALUES('$Lqr_encode', '$Inv_encode', '$nla_n_encode', '$Inv_ass_encode', '$pm_encode', '$sr_encode', '$roi_encode', '$nw_ta_encode', '$regulat_encode', '$company_name');

            "; 
            if(mysqli_multi_query($conn, $query)) {

                // ------------Local----------------
                header("Location:$baseURL" . 'index.php?n=1');
                // To redirect to single page//
                // header("Location: $baseURL" . 'resources/templates/pages/single.php?company='. $company_name);

                // ------------Heroku---------------
                // header("Location: " . 'https://rating-machine.herokuapp.com/resources/templates/pages/single.php?company=' . $company_name);
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);

            // check if four but not five
            if(!empty($_POST['to4']) && empty($_POST['to5'])) {
                // Err("You can only submit for three or five years"); 
                // header("Location: $baseURL" . 'resources/templates/pages/inputs2.php');
                header("Location:$baseURL" . 'index.php?n=1');
            }

            // check if four and five
            if(!empty($_POST['to4']) && !empty($_POST['to5'])) {
                $query = 
                "INSERT INTO fund_manager_requirements (turn_over, pre_tax_pro, investment_asset, f_asset, t_asset, liquid_asset, invest_income, eqty, anum, fin_ass, ffo, finance_cost, add_fix, dep, company) 
                VALUES('$turn_over_encode', '$pre_tax_pro_encode', '$investment_asset_encode', '$f_asset_encode', '$t_asset_encode', '$liquid_asset_encode', '$invest_income_encode', '$eqty_encode', '$anum_encode', '$fin_ass_encode', '$ffo_encode', '$finance_cost_encode', '$add_fix_encode', '$dep_encode', '$company_name');

            INSERT INTO fund_manager_computes (nia, nld, tol, ntl, aql, foc, total_debt, ebitda, tdk, ffo_td, foc_td, ebitda_int, company) 

            VALUES('$nia_encode', '$nld_encode', '$tol_encode', '$ntl_encode', '$aql_encode', '$foc_encode', '$foc_encode', '$total_debt_encode', '$ebitda_encode', '$tdk_encode', '$ffo_td_encode', '$foc_td_encode', '$ebitda_int_encode', '$company_name');

            INSERT INTO fund_manager_quantities (Lqr, Inv, nla_n, Inv_ass, pm, sr, roi, nw_ta, regulat, company) 
                VALUES('$Lqr_encode', '$Inv_encode', '$nla_n_encode', '$Inv_ass_encode', '$pm_encode', '$sr_encode', '$roi_encode', '$nw_ta_encode', '$regulat_encode', '$company_name');

            INSERT INTO fund_manager_trendanalysis (t_over, pre_pro, fixed_asset, total_asset, inv_asset, equit, an, int_inc, liq_asset, net_liq, total_liab, net_liab, company) 
                VALUES('$t_over_encode', '$pre_pro_encode', '$fixed_asset_encode', '$total_asset_encode', '$inv_asset_encode', '$equit_encode', '$an_encode', '$int_inc_encode', '$liq_asset_encode', '$net_liq_encode', '$total_liab_encode', '$net_liab_encode', '$company_name');"; 
                if(mysqli_multi_query($conn, $query)) {
    
                    // ------------Local----------------
                    header("Location:$baseURL" . 'index.php?n=1');
                    // header("Location: $baseURL" . 'resources/templates/pages/single.php?company='. $company_name);
    
                    // ------------Heroku---------------
                    // header("Location: " . 'https://rating-machine.herokuapp.com/resources/templates/pages/single.php?company=' . $company_name);
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
                }
    
                mysqli_close($conn);
            }
        } else {
            Err("You can only submit for more than three years"); 
            // header("Location: $baseURL" . 'resources/templates/pages/inputs2.php');
        }

    } else {
        // coming soon...
    }


    //----------**** SAVE UPDATE INPUT **** --------------------------------//

    if(isset($_POST['update'])) {

         // Company
         $company_name = $_POST['company'];
        
         // TurnOver
         $to1 = $_POST['to1'];
         $to2 = $_POST['to2'];
         $to3 = $_POST['to3'];
         $to4 = $_POST['to4'];
         $to5 = $_POST['to5'];
 
         $turn_over = [
             "to1" => $to1,
             "to2" => $to2,
             "to3" => $to3,
             "to4" => $to4,
             "to5" => $to5,
         ];
         $turn_over_encode = json_encode($turn_over);
 
         // Pretax Profit
         $ptp1 = $_POST['ptp1'];
         $ptp2 = $_POST['ptp2'];
         $ptp3 = $_POST['ptp3'];
         $ptp4 = $_POST['ptp4'];
         $ptp5 = $_POST['ptp5'];
 
         $pre_tax_pro = [
             "ptp1" => $ptp1,
             "ptp2" => $ptp2,
             "ptp3" => $ptp3,
             "ptp4" => $ptp4,
             "ptp5" => $ptp5,
         ];
         $pre_tax_pro_encode = json_encode($pre_tax_pro);
 
         // Investment Assets
         $invest_ass1 = $_POST['invest_ass1'];
         $invest_ass2 = $_POST['invest_ass2'];
         $invest_ass3 = $_POST['invest_ass3'];
         $invest_ass4 = $_POST['invest_ass4'];
         $invest_ass5 = $_POST['invest_ass5'];
 
         $investment_asset = [
             "invest_ass1" => $invest_ass1,
             "invest_ass2" => $invest_ass2,
             "invest_ass3" => $invest_ass3,
             "invest_ass4" => $invest_ass4,
             "invest_ass5" => $invest_ass5,
         ];
         $investment_aset_encode = json_encode($investment_asset);
 
         // FAsset 
         $fa1 = $_POST['fa1'];
         $fa2 = $_POST['fa2'];
         $fa3 = $_POST['fa3'];
         $fa4 = $_POST['fa4'];
         $fa5 = $_POST['fa5'];
 
         $f_asset = [
             "fa1" => $fa1,
             "fa2" => $fa2,
             "fa3" => $fa3,
             "fa4" => $fa4,
             "fa5" => $fa5,
         ];
         $f_asset_encode = json_encode($f_asset);
 
         // TAsset
         $ta1 = $_POST['ta1'];
         $ta2 = $_POST['ta2'];
         $ta3 = $_POST['ta3'];
         $ta4 = $_POST['ta4'];
         $ta5 = $_POST['ta5'];
 
         $t_asset = [
             "ta1" => $ta1,
             "ta2" => $ta2,
             "ta3" => $ta3,
             "ta4" => $ta4,
             "ta5" => $ta5,
         ];
         $t_asset_encode = json_encode($t_asset);
 
         // Liquid Assets
         $liq_ass1 = $_POST['liq_ass1'];
         $liq_ass2 = $_POST['liq_ass2'];
         $liq_ass3 = $_POST['liq_ass3'];
         $liq_ass4 = $_POST['liq_ass4'];
         $liq_ass5 = $_POST['liq_ass5'];
 
         $liquid_asset = [
             "liq_ass1" => $liq_ass1,
             "liq_ass2" => $liq_ass2,
             "liq_ass3" => $liq_ass3,
             "liq_ass4" => $liq_ass4,
             "liq_ass5" => $liq_ass5,
         ];
         $liquid_asset_encode = json_encode($liquid_asset);
 
         // Investment Income
         $invest_income1 = $_POST['invest_income1'];
         $invest_income2 = $_POST['invest_income2'];
         $invest_income3 = $_POST['invest_income3'];
         $invest_income4 = $_POST['invest_income4'];
         $invest_income5 = $_POST['invest_income5'];
 
         $invest_income = [
             "invest_income1" => $invest_income1,
             "invest_income2" => $invest_income2,
             "invest_income3" => $invest_income3,
             "invest_income4" => $invest_income4,
             "invest_income5" => $invest_income5,
         ];
         $invest_income_encode = json_encode($invest_income);
 
         // Equity
         $eqty1 = $_POST['eqty1'];
         $eqty2 = $_POST['eqty2'];
         $eqty3 = $_POST['eqty3'];
         $eqty4 = $_POST['eqty4'];
         $eqty5 = $_POST['eqty5'];
 
         $eqty = [
             "eqty1" => $eqty1,
             "eqty2" => $eqty2,
             "eqty3" => $eqty3,
             "eqty4" => $eqty4,
             "eqty5" => $eqty5,
         ];
         $eqty_encode = json_encode($eqty);
 
         // Anum
         $anum1 = $_POST['anum1'];
         $anum2 = $_POST['anum2'];
         $anum3 = $_POST['anum3'];
         $anum4 = $_POST['anum4'];
         $anum5 = $_POST['anum5'];
 
         $anum = [
             "anum1" => $anum1,
             "anum2" => $anum2,
             "anum3" => $anum3,
             "anum4" => $anum4,
             "anum5" => $anum5,
         ];
         $anum_encode = json_encode($anum);
 
         // FIN-Ass
         $fin_ass1 = $_POST['fin_ass1'];
         $fin_ass2 = $_POST['fin_ass2'];
         $fin_ass3 = $_POST['fin_ass3'];
         $fin_ass4 = $_POST['fin_ass4'];
         $fin_ass5 = $_POST['fin_ass5'];
 
         $fin_ass = [
             "fin_ass1" => $fin_ass1,
             "fin_ass2" => $fin_ass2,
             "fin_ass3" => $fin_ass3,
             "fin_ass4" => $fin_ass4,
             "fin_ass5" => $fin_ass5,
         ];
         $fin_ass_encode = json_encode($fin_ass);
 
         // FFO
         $ffo1 = $_POST['ffo1'];
         $ffo2 = $_POST['ffo2'];
         $ffo3 = $_POST['ffo3'];
         $ffo4 = $_POST['ffo4'];
         $ffo5 = $_POST['ffo5'];
 
         $ffo = [
             "ffo1" => $ffo1,
             "ffo2" => $ffo2,
             "ffo3" => $ffo3,
             "ffo4" => $ffo4,
             "ffo5" => $ffo5,
         ];
         $ffo_encode = json_encode($ffo);
 
         // Finance Cost
         $fc1 = $_POST['fc1'];
         $fc2 = $_POST['fc2'];
         $fc3 = $_POST['fc3'];
         $fc4 = $_POST['fc4'];
         $fc5 = $_POST['fc5'];
 
         $finance_cost = [
             "fc1" => $fc1,
             "fc2" => $fc2,
             "fc3" => $fc3,
             "fc4" => $fc4,
             "fc5" => $fc5,
         ];
         $finance_cost_encode = json_encode($finance_cost);
 
         // AddFix
         $ad1 = $_POST['ad1'];
         $ad2 = $_POST['ad2'];
         $ad3 = $_POST['ad3'];
         $ad4 = $_POST['ad4'];
         $ad5 = $_POST['ad5'];
 
         $add_fix = [
             "ad1" => $ad1,
             "ad2" => $ad2,
             "ad3" => $ad3,
             "ad4" => $ad4,
             "ad5" => $ad5,
         ];
         $add_fix_encode = json_encode($add_fix);
 
         // Dep
         $dep1 = $_POST['dep1'];
         $dep2 = $_POST['dep2'];
         $dep3 = $_POST['dep3'];
         $dep4 = $_POST['dep4'];
         $dep5 = $_POST['dep5'];
 
         $dep = [
             "dep1" => $dep1,
             "dep2" => $dep2,
             "dep3" => $dep3,
             "dep4" => $dep4,
             "dep5" => $dep5,
         ];
         $dep_encode = json_encode($dep);
     
         // ----------------------------------BEGIN INSERTING "COMPUTED VALUES"--------------------------
         //  Non Investment Asset
         $nia1 = $_POST['nia1'];
         $nia2 = $_POST['nia2'];
         $nia3 = $_POST['nia3'];
         $nia4 = $_POST['nia4'];
         $nia5 = $_POST['nia5'];
 
         $nia = [
             "nia1" => $nia1,
             "nia2" => $nia2,
             "nia3" => $nia3,
             "nia4" => $nia4,
             "nia5" => $nia5,
         ];
         $nia_encode = json_encode($nia);
 
         // Net Liquid
         $nld1 = $_POST['nld1'];
         $nld2 = $_POST['nld2'];
         $nld3 = $_POST['nld3'];
         $nld4 = $_POST['nld4'];
         $nld5 = $_POST['nld5'];
 
         $nld = [
             "nld1" => $nld1,
             "nld2" => $nld2,
             "nld3" => $nld3,
             "nld4" => $nld4,
             "nld5" => $nld5,
         ];
         $nld_encode = json_encode($nld);
 
         // Total Liabilities
         $tol1 = $_POST['tol1'];
         $tol2 = $_POST['tol2'];
         $tol3 = $_POST['tol3'];
         $tol4 = $_POST['tol4'];
         $tol5 = $_POST['tol5'];
 
         $tol = [
             "tol1" => $tol1,
             "tol2" => $tol2,
             "tol3" => $tol3,
             "tol4" => $tol4,
             "tol5" => $tol5,
         ];
         $tol_encode = json_encode($tol);
 
         // Net Liabs
         $ntl1 = $_POST['ntl1'];
         $ntl2 = $_POST['ntl2'];
         $ntl3 = $_POST['ntl3'];
         $ntl4 = $_POST['ntl4'];
         $ntl5 = $_POST['ntl5'];
 
         $ntl = [
             "ntl1" => $ntl1,
             "ntl2" => $ntl2,
             "ntl3" => $ntl3,
             "ntl4" => $ntl4,
             "ntl5" => $ntl5,
         ];
         $ntl_encode = json_encode($ntl);
 
         // Asset Quality
         $aql1 = $_POST['aql1'];
         $aql2 = $_POST['aql2'];
         $aql3 = $_POST['aql3'];
         $aql4 = $_POST['aql4'];
         $aql5 = $_POST['aql5'];
 
         $aql = [
             "aql1" => $aql1,
             "aql2" => $aql2,
             "aql3" => $aql3,
             "aql4" => $aql4,
             "aql5" => $aql5,
         ];
         $aql_encode = json_encode($aql);
 
         // FOC 
         $foc1 = $_POST['foc1'];
         $foc2 = $_POST['foc2'];
         $foc3 = $_POST['foc3'];
         $foc4 = $_POST['foc4'];
         $foc5 = $_POST['foc5'];
 
         $foc = [
             "foc1" => $foc1,
             "foc2" => $foc2,
             "foc3" => $foc3,
             "foc4" => $foc4,
             "foc5" => $foc5,
         ];
         $foc_encode = json_encode($foc);
 
         // Total Debt
         $total_debt1 = $_POST['td1'];
         $total_debt2 = $_POST['td2'];
         $total_debt3 = $_POST['td3'];
         $total_debt4 = $_POST['td4'];
         $total_debt5 = $_POST['td5'];
 
         $total_debt = [
             "td1" => $total_debt1,
             "td2" => $total_debt2,
             "td3" => $total_debt3,
             "td4" => $total_debt4,
             "td5" => $total_debt5,
         ];
         $total_debt_encode = json_encode($total_debt);
 
         // Ebitda
         $ebitda1 = $_POST['ebitda1'];
         $ebitda2 = $_POST['ebitda2'];
         $ebitda3 = $_POST['ebitda3'];
         $ebitda4 = $_POST['ebitda4'];
         $ebitda5 = $_POST['ebitda5'];
 
         $ebitda = [
             "ebitda1" => $ebitda1,
             "ebitda2" => $ebitda2,
             "ebitda3" => $ebitda3,
             "ebitda4" => $ebitda4,
             "ebitda5" => $ebitda5,
         ];
         $ebitda_encode = json_encode($ebitda);
 
         // TD/K
         $tdk_1 = $_POST['tdk_1'];
         $tdk_2 = $_POST['tdk_2'];
         $tdk_3 = $_POST['tdk_3'];
         $tdk_4 = $_POST['tdk_4'];
         $tdk_5 = $_POST['tdk_5'];
 
         $tdk = [
             "tdk_1" => $tdk_1,
             "tdk_2" => $tdk_2,
             "tdk_3" => $tdk_3,
             "tdk_4" => $tdk_4,
             "tdk_5" => $tdk_5,
         ];
         $tdk_encode = json_encode($tdk);
 
         // FFO/TD
         $ffo_td_1 = $_POST['ffo_td_1'];
         $ffo_td_2 = $_POST['ffo_td_2'];
         $ffo_td_3 = $_POST['ffo_td_3'];
         $ffo_td_4 = $_POST['ffo_td_4'];
         $ffo_td_5 = $_POST['ffo_td_5'];
 
         $ffo_td = [
             "ffo_td_1" => $ffo_td_1,
             "ffo_td_2" => $ffo_td_2,
             "ffo_td_3" => $ffo_td_3,
             "ffo_td_4" => $ffo_td_4,
             "ffo_td_5" => $ffo_td_5,
         ];
         $ffo_td_encode = json_encode($ffo_td);
 
         // FOC/TD
         $foc_td_1 = $_POST['foc_td_1'];
         $foc_td_2 = $_POST['foc_td_1'];
         $foc_td_3 = $_POST['foc_td_1'];
         $foc_td_4 = $_POST['foc_td_1'];
         $foc_td_5 = $_POST['foc_td_1'];
 
         $foc_td = [
             "foc_td_1" => $foc_td_1,
             "foc_td_2" => $ffo_td_2,
             "foc_td_3" => $ffo_td_3,
             "foc_td_4" => $ffo_td_4,
             "foc_td_5" => $ffo_td_5,
         ];
         $foc_td_encode = json_encode($foc_td);
 
         // EBITDA/INT.COV
         $ebitda_int_1 = $_POST['ebitda_int_1'];
         $ebitda_int_2 = $_POST['ebitda_int_2'];
         $ebitda_int_3 = $_POST['ebitda_int_3'];
         $ebitda_int_4 = $_POST['ebitda_int_4'];
         $ebitda_int_5 = $_POST['ebitda_int_5'];
 
         $ebitda_int = [
             "ebitda_int_1" => $ebitda_int_1,
             "ebitda_int_2" => $ebitda_int_2,
             "ebitda_int_3" => $ebitda_int_3,
             "ebitda_int_4" => $ebitda_int_4,
             "ebitda_int_5" => $ebitda_int_5,
         ];
         $ebitda_int_encode = json_encode($ebitda_int);
 
         // ----------------------------------END INSERTING "COMPUTED VALUES"-------------------------- //
 
         // ----------------------------------BEGIN INSERTING "QUANTITATIVES VALUES"--------------------------
         // Liq-ass/Tot-ass
         $Lqr1 = $_POST['Lqr1'];
         $Lqr2 = $_POST['Lqr2'];
         $Lqr3 = $_POST['Lqr3'];
         $Lqr4 = $_POST['Lqr4'];
         $Lqr5 = $_POST['Lqr5'];
         $Lqr_3yrs = $_POST['3yt_Lqr'];
         $Lqr_5yrs = $_POST['5yt_Lqr'];
         $l30 = $_POST['l30'];
 
 
         $Lqr = [
             "Lqr1" => $Lqr1,
             "Lqr2" => $Lqr2,
             "Lqr3" => $Lqr3,
             "Lqr4" => $Lqr4,
             "Lqr5" => $Lqr5,
             "3yt_Lqr" => $Lqr_3yrs,
             "5yt_Lqr" => $Lqr_5yrs,
             "l30" => $l30,
 
         ];
         $Lqr_encode = json_encode($Lqr);
 
         // Inv / Aum
         $Inv1 = $_POST['Inv1'];
         $Inv2 = $_POST['Inv2'];
         $Inv3 = $_POST['Inv3'];
         $Inv4 = $_POST['Inv4'];
         $Inv5 = $_POST['Inv5'];
         $Inv_3yrs = $_POST['3yt_Inv'];
         $Inv_5yrs = $_POST['5yt_Inv'];
         $l31 = $_POST['l31'];
 
     
         $Inv = [
             "Inv1" => $Inv1,
             "Inv2" => $Inv2,
             "Inv3" => $Inv3,
             "Inv4" => $Inv4,
             "Inv5" => $Inv5,
             "3yt_Inv" => $Inv_3yrs,
             "5yt_Inv" => $Inv_5yrs,
             "l31" => $l31,
 
         ];
         $Inv_encode = json_encode($Inv);
 
         // Net-liqui-ass / Net-liabs
         $nla_n1 = $_POST['nla_n1'];
         $nla_n2 = $_POST['nla_n2'];
         $nla_n3 = $_POST['nla_n3'];
         $nla_n4 = $_POST['nla_n4'];
         $nla_n5 = $_POST['nla_n5'];
         $nla_n_3yrs = $_POST['3yt_nla_n'];
         $nla_n_5yrs = $_POST['5yt_nla_n'];
         $l32 = $_POST['l32'];
 
         $nla_n = [
             "nla_n1" => $nla_n1,
             "nla_n2" => $nla_n2,
             "nla_n3" => $nla_n3,
             "nla_n4" => $nla_n4,
             "nla_n5" => $nla_n5,
             "3yt_nla_n" => $nla_n_3yrs,
             "5yt_nla_n" => $nla_n_5yrs,
             "l32" => $l32,
         ];
 
         $nla_n_encode = json_encode($nla_n);
 
         // Inv / Ass
         $Inv_ass1 = $_POST['Inv_ass1'];
         $Inv_ass2 = $_POST['Inv_ass2'];
         $Inv_ass3 = $_POST['Inv_ass3'];
         $Inv_ass4 = $_POST['Inv_ass4'];
         $Inv_ass5 = $_POST['Inv_ass5'];
         $Inv_ass_3yrs = $_POST['3yt_Inv_ass'];
         $Inv_ass_5yrs = $_POST['5yt_Inv_ass'];
         $l33 = $_POST['l33'];
 
         $Inv_ass = [
             "Inv_ass1" => $Inv_ass1,
             "Inv_ass2" => $Inv_ass2,
             "Inv_ass3" => $Inv_ass3,
             "Inv_ass4" => $Inv_ass4,
             "Inv_ass5" => $Inv_ass5,
             "3yt_Inv_ass" => $Inv_ass_3yrs,
             "5yt_Inv_ass" => $Inv_ass_5yrs,
             "l33" => $l33,
 
         ];
         $Inv_ass_encode = json_encode($Inv_ass);
 
         // PM
         $pm1 = $_POST['pm1'];
         $pm2 = $_POST['pm2'];
         $pm3 = $_POST['pm3'];
         $pm4 = $_POST['pm4'];
         $pm5 = $_POST['pm5'];
         $pm_3yrs = $_POST['3yt_pm'];
         $pm_5yrs = $_POST['5yt_pm'];
         $l34 = $_POST['l34'];
 
 
         $pm = [
             "pm1" => $pm1,
             "pm2" => $pm2,
             "pm3" => $pm3,
             "pm4" => $pm4,
             "pm5" => $pm5,
             "3yt_pm" => $pm_3yrs,
             "5yt_pm" => $pm_5yrs,
             "l34" => $l34,
 
         ];
         $pm_encode = json_encode($pm);
 
         // SR
         $sr1 = $_POST['sr1'];
         $sr2 = $_POST['sr2'];
         $sr3 = $_POST['sr3'];
         $sr4 = $_POST['sr4'];
         $sr5 = $_POST['sr5'];
         $sr_3yrs = $_POST['3yt_sr'];
         $sr_5yrs = $_POST['5yt_sr'];
         $l35 = $_POST['l35'];
 
 
         $sr = [
             "sr1" => $sr1,
             "sr2" => $sr2,
             "sr3" => $sr3,
             "sr4" => $sr4,
             "sr5" => $sr5,
             "3yt_sr" => $sr_3yrs,
             "5yt_sr" => $sr_5yrs,
             "l35" => $l35,
 
         ];
         $sr_encode = json_encode($sr);
 
         // ROI
         $roi1 = $_POST['roi1'];
         $roi2 = $_POST['roi2'];
         $roi3 = $_POST['roi3'];
         $roi4 = $_POST['roi4'];
         $roi5 = $_POST['roi5'];
         $roi_3yrs = $_POST['3yt_roi'];
         $roi_5yrs = $_POST['5yt_roi'];
         $l36 = $_POST['l36'];
 
         $roi = [
             "roi1" => $roi1,
             "roi2" => $roi2,
             "roi3" => $roi3,
             "roi4" => $roi4,
             "roi5" => $roi5,
             "3yt_roi" => $roi_3yrs,
             "5yt_roi" => $roi_5yrs,
             "l36" => $l36,
 
         ];
         $roi_encode = json_encode($roi);
 
         // NW/TA
         $nw_ta1 = $_POST['nw_ta1'];
         $nw_ta2 = $_POST['nw_ta2'];
         $nw_ta3 = $_POST['nw_ta3'];
         $nw_ta4 = $_POST['nw_ta4'];
         $nw_ta5 = $_POST['nw_ta5'];
        //  $nw_ta_3yrs = $_POST['3yt_nw_ta'];
        //  $nw_ta_5yrs = $_POST['5yt_nw_ta'];
        //  $l30 = $_POST['l30'];
 
 
         $nw_ta = [
             "nw_ta1" => $nw_ta1,
             "nw_ta2" => $nw_ta2,
             "nw_ta3" => $nw_ta3,
             "nw_ta4" => $nw_ta4,
             "nw_ta5" => $nw_ta5,
            //  "3yt_nw_ta" => $nw_ta_3yrs,
            //  "5yt_nw_ta" => $nw_ta_5yrs,
            //  "l30" => $l30,
 
         ];
         $nw_ta_encode = json_encode($nw_ta);
 
         // Regulatory
         $regulat1 = $_POST['regulat1'];
         $regulat2 = $_POST['regulat2'];
         $regulat3 = $_POST['regulat3'];
         $regulat4 = $_POST['regulat4'];
         $regulat5 = $_POST['regulat5'];
        //  $regulat_3yrs = $_POST['3yt_regulat'];
        //  $regulat_5yrs = $_POST['5yt_regulat'];
        //  $l30 = $_POST['l30'];
 
         $regulat = [
             "regulat1" => $regulat1,
             "regulat2" => $regulat2,
             "regulat3" => $regulat3,
             "regulat4" => $regulat4,
             "regulat5" => $regulat5,
            //  "3yt_regulat" => $regulat_3yrs,
            //  "5yt_regulat" => $regulat_5yrs,
            //  "l30" => $l30,
 
         ];
         $regulat_encode = json_encode($regulat);
 
        //  // REQ CAP
        //  $req_cap1 = $_POST['req_cap1'];
        //  $req_cap2 = $_POST['req_cap2'];
        //  $req_cap3 = $_POST['req_cap3'];
        //  $req_cap4 = $_POST['req_cap4'];
        //  $req_cap5 = $_POST['req_cap5'];
        //  $req_cap_3yrs = $_POST['3yt_req_cap'];
        //  $req_cap_5yrs = $_POST['5yt_req_cap'];
        //  $l30 = $_POST['l30'];
 
        //  $req_cap = [
        //      "req_cap1" => $req_cap1,
        //      "req_cap2" => $req_cap2,
        //      "req_cap3" => $req_cap3,
        //      "req_cap4" => $req_cap4,
        //      "req_cap5" => $req_cap5,
        //      "3yt_req_cap" => $req_cap_3yrs,
        //      "5yt_req_cap" => $req_cap_5yrs,
        //      "l30" => $l30,
 
        //  ];
        //  $req_cap_encode = json_encode($req_cap);
         // ----------------------------------END INSERTING "QUANTITATIVES VALUES"----------------------------
 
         // ----------------------------------BEGIN INSERTING "TREND ANALYSIS VALUES"--------------------------
         // TurnOver TA
         $t_over1 = $_POST['turn_over1'];
         $t_over2 = $_POST['turn_over2'];
         $t_over3 = $_POST['turn_over3'];
         $t_over4 = $_POST['turn_over4'];
         $t_over5 = $_POST['turn_over5'];
         $t_over_3yrs = $_POST['3yt_turn_over'];
         $t_over_5yrs = $_POST['5yt_turn_over'];
         $l43 = $_POST['l43'];
 
 
         $t_over = [
             "turn_over1" => $t_over1,
             "turn_over2" => $t_over2,
             "turn_over3" => $t_over3,
             "turn_over4" => $t_over4,
             "turn_over5" => $t_over5,
             "3yt_turn_over" => $t_over_3yrs,
             "5yt_turn_over" => $t_over_5yrs,
             "l43" => $l43,
 
         ];
         $t_over_encode = json_encode($t_over);
 
         // Pretax Profit
         $pre_pro1 = $_POST['pre_pro1'];
         $pre_pro2 = $_POST['pre_pro2'];
         $pre_pro3 = $_POST['pre_pro3'];
         $pre_pro4 = $_POST['pre_pro4'];
         $pre_pro5 = $_POST['pre_pro5'];
         $pre_pro_3yrs = $_POST['3yt_pre_pro'];
         $pre_pro_5yrs = $_POST['5yt_pre_pro'];
         $l44 = $_POST['l44'];
 
         $pre_pro = [
             "pre_pro1" => $pre_pro1,
             "pre_pro2" => $pre_pro2,
             "pre_pro3" => $pre_pro3,
             "pre_pro4" => $pre_pro4,
             "pre_pro5" => $pre_pro5,
             "3yt_pre_pro" => $pre_pro_3yrs,
             "5yt_pre_pro" => $pre_pro_5yrs,
             "l44" => $l44,44
         ];
         $pre_pro_encode = json_encode($pre_pro);
 
         // Fixed Asset
         $f_asset1 = $_POST['f_asset1'];
         $f_asset2 = $_POST['f_asset2'];
         $f_asset3 = $_POST['f_asset3'];
         $f_asset4 = $_POST['f_asset4'];
         $f_asset5 = $_POST['f_asset5'];
         $f_asset_3yrs = $_POST['3yt_f_asset'];
         $f_asset_5yrs = $_POST['5yt_f_asset'];
         $l45 = $_POST['l45'];
 
 
         $fixed_asset = [
             "f_asset1" => $f_asset1,
             "f_asset2" => $f_asset2,
             "f_asset3" => $f_asset3,
             "f_asset4" => $f_asset4,
             "f_asset5" => $f_asset5,
             "3yt_f_asset" => $f_asset_3yrs,
             "5yt_f_asset" => $f_asset_5yrs,
             "l45" => $l45,
 
         ];
         $fixed_asset_encode = json_encode($fixed_asset);
 
         // Total Asset
         $t_asset1 = $_POST['t_asset1'];
         $t_asset2 = $_POST['t_asset2'];
         $t_asset3 = $_POST['t_asset3'];
         $t_asset4 = $_POST['t_asset4'];
         $t_asset5 = $_POST['t_asset5'];
         $t_asset_3yrs = $_POST['3yt_t_asset'];
         $t_asset5_5yrs = $_POST['5yt_t_asset'];
         $l46 = $_POST['l46'];
 
 
         $total_asset = [
             "t_asset1" => $t_asset1,
             "t_asset2" => $t_asset2,
             "t_asset3" => $t_asset3,
             "t_asset4" => $t_asset4,
             "t_asset5" => $t_asset5,
             "3yt_t_asset" => $t_asset_3yrs,
             "5yt_t_asset" => $t_asset5_5yrs,
             "l46" => $l46,
 
         ];
         $total_asset_encode = json_encode($total_asset);
 
         // Investment Assets
         $inv_asset1 = $_POST['inv_asset1'];
         $inv_asset2 = $_POST['inv_asset2'];
         $inv_asset3 = $_POST['inv_asset3'];
         $inv_asset4 = $_POST['inv_asset4'];
         $inv_asset5 = $_POST['inv_asset5'];
         $inv_asset_3yrs = $_POST['3yt_inv_asset'];
         $inv_asset_5yrs = $_POST['5yt_inv_asset'];
         $l47 = $_POST['l47'];
 
         $inv_asset = [
             "inv_asset1" => $inv_asset1,
             "inv_asset2" => $inv_asset2,
             "inv_asset3" => $inv_asset3,
             "inv_asset4" => $inv_asset4,
             "inv_asset5" => $inv_asset5,
             "3yt_inv_asset" => $inv_asset_3yrs,
             "5yt_inv_asset" => $inv_asset_5yrs,
             "l47" => $l47,
 
         ];
         $inv_asset_encode = json_encode($inv_asset);
 
         // Equity
         $equit1 = $_POST['equit1'];
         $equit2 = $_POST['equit2'];
         $equit3 = $_POST['equit3'];
         $equit4 = $_POST['equit4'];
         $equit5 = $_POST['equit5'];
         $equit_3yrs = $_POST['3yt_equit'];
         $equit_5yrs = $_POST['5yt_equit'];
         $l48 = $_POST['l48'];
 
         $equit = [
             "equit1" => $equit1,
             "equit2" => $equit2,
             "equit3" => $equit3,
             "equit4" => $equit4,
             "equit5" => $equit5,
             "3yt_equit" => $equit_3yrs,
             "5yt_equit" => $equit_5yrs,
             "l48" => $l48,
 
         ];
         $equit_encode = json_encode($equit);
 
         // Anum
         $an1 = $_POST['an1'];
         $an2 = $_POST['an2'];
         $an3 = $_POST['an3'];
         $an4 = $_POST['an4'];
         $an5 = $_POST['an5'];
         $an_3yrs = $_POST['3yt_an'];
         $an_5yrs = $_POST['5yt_an'];
         $l49 = $_POST['l49'];
 
         $an = [
             "an1" => $an1,
             "an2" => $an2,
             "an3" => $an3,
             "an4" => $an4,
             "an5" => $an5,
             "3yt_an" => $an_3yrs,
             "5yt_an" => $an_5yrs,
             "l49" => $l49,
 
         ];
         $an_encode = json_encode($an);
 
         // Investment Income
         $int_inc1 = $_POST['int_inc1'];
         $int_inc2 = $_POST['int_inc2'];
         $int_inc3 = $_POST['int_inc3'];
         $int_inc4 = $_POST['int_inc4'];
         $int_inc5 = $_POST['int_inc5'];
         $int_inc_3yrs = $_POST['3yt_int_inc'];
         $int_inc_5yrs = $_POST['5yt_int_inc'];
         $l50 = $_POST['l50'];
 
         $int_inc = [
             "int_inc1" => $int_inc1,
             "int_inc2" => $int_inc2,
             "int_inc3" => $int_inc3,
             "int_inc4" => $int_inc4,
             "int_inc5" => $int_inc5,
             "3yt_int_inc" => $int_inc_3yrs,
             "5yt_int_inc" => $int_inc_5yrs,
             "l50" => $l50,
 
         ];
         $int_inc_encode = json_encode($int_inc);
 
         // Liquid Assets
         $liq_asset1 = $_POST['liq_asset1'];
         $liq_asset2 = $_POST['liq_asset2'];
         $liq_asset3 = $_POST['liq_asset3'];
         $liq_asset4 = $_POST['liq_asset4'];
         $liq_asset5 = $_POST['liq_asset5'];
         $liq_asset_3yrs = $_POST['3yt_liq_asset'];
         $liq_asset_5yrs = $_POST['5yt_liq_asset'];
         $l51 = $_POST['l51'];
 
         $liq_asset = [
             "liq_asset1" => $liq_asset1,
             "liq_asset2" => $liq_asset2,
             "liq_asset3" => $liq_asset3,
             "liq_asset4" => $liq_asset4,
             "liq_asset5" => $liq_asset5,
             "3yt_liq_asset" => $liq_asset_3yrs,
             "5yt_liq_asset" => $liq_asset_5yrs,
             "l51" => $l51,
         ];
         $liq_asset_encode = json_encode($liq_asset);
 
         // Net Liquid
         $net_liq1 = $_POST['net_liq1'];
         $net_liq2 = $_POST['net_liq2'];
         $net_liq3 = $_POST['net_liq3'];
         $net_liq4 = $_POST['net_liq4'];
         $net_liq5 = $_POST['net_liq5'];
         $net_liq_3yrs = $_POST['3yt_net_liq'];
         $net_liq_5yrs = $_POST['5yt_net_liq'];
         $l52 = $_POST['l52'];
 
         $net_liq = [
             "net_liq1" => $net_liq1,
             "net_liq2" => $net_liq2,
             "net_liq3" => $net_liq3,
             "net_liq4" => $net_liq4,
             "net_liq5" => $net_liq5,
             "3yt_net_liq" => $net_liq_3yrs,
             "5yt_net_liq" => $net_liq_5yrs,
             "l52" => $l52,
         ];
         $net_liq_encode = json_encode($net_liq);
 
         // Total Liabilities
         $total_liab1 = $_POST['total_liab1'];
         $total_liab2 = $_POST['total_liab2'];
         $total_liab3 = $_POST['total_liab3'];
         $total_liab4 = $_POST['total_liab4'];
         $total_liab5 = $_POST['total_liab5'];
         $total_liab_3yrs = $_POST['3yt_total_liab'];
         $total_liab_5yrs = $_POST['5yt_total_liab'];
         $l53 = $_POST['l53'];
 
 
         $total_liab = [
             "total_liab1" => $total_liab1,
             "total_liab2" => $total_liab2,
             "total_liab3" => $total_liab3,
             "total_liab4" => $total_liab4,
             "total_liab5" => $total_liab5,
             "3yt_total_liab" => $total_liab_3yrs,
             "5yt_total_liab" => $total_liab_5yrs,
             "l53" => $l53
 
         ];
         $total_liab_encode = json_encode($total_liab);
 
         // Net Liabs
         $net_liab1 = $_POST['net_liab1'];
         $net_liab2 = $_POST['net_liab2'];
         $net_liab3 = $_POST['net_liab3'];
         $net_liab4 = $_POST['net_liab4'];
         $net_liab5 = $_POST['net_liab5'];
         $net_liab_3yrs = $_POST['3yt_net_liab'];
         $net_liab_5yrs = $_POST['5yt_net_liab'];
         $l54 = $_POST['l54'];
 
 
         $net_liab = [
             "net_liab1" => $net_liab1,
             "net_liab2" => $net_liab2,
             "net_liab3" => $net_liab3,
             "net_liab4" => $net_liab4,
             "net_liab5" => $net_liab5,
             "3yt_net_liab" => $net_liab_3yrs,
             "5yt_net_liab" => $net_liab_5yrs,
             "l54" => $l31
         ];
         $net_liab_encode = json_encode($net_liab);
 
            try {
            
            $stmt = $conn->prepare("UPDATE fund_manager_requirements

            SET turn_over=?, pre_tax_pro=?, investment_asset=?, f_asset=?, t_asset=?, liquid_asset=?, invest_income=?, eqty=?, anum=?, fin_ass=?, ffo=?, finance_cost=?, add_fix=?, dep=?, company=?

            WHERE company = '$company_name'");

            //     // -- WHERE company = '$company_name'");
                $stmt->bind_param("sssssssssssssss", $turn_over_encode, $pre_tax_pro_encode, $investment_aset_encode, $f_asset_encode, $t_asset_encode, $liquid_asset_encode, $invest_income_encode, $eqty_encode, $anum_encode, $fin_ass_encode, $ffo_encode, $finance_cost_encode, $add_fix_encode, $dep_encode, $company_name);              
                $result = ($stmt->execute());
                // Second Table
                $stmt = $conn->prepare("UPDATE fund_manager_computes SET nia=?, nld=?, tol=?, ntl=?, aql=?, foc=?, total_debt=?, ebitda=?, company=?
                WHERE company = '$company_name'");
                    $stmt->bind_param("sssssssss", $nia_encode, $nld_encode, $tol_encode, $ntl_encode, $aql_encode, $foc_encode, $total_debt_encode, $ebitda_encode, $company_name);              
                    $result = ($stmt->execute()); 
    
            // Third Table
            $stmt = $conn->prepare("UPDATE fund_manager_quantities SET Lqr=?, Inv=?, nla_n=?, Inv_ass=?, pm=?, sr=?, roi=?, nw_ta=?, regulat=?, company=?
            WHERE company = '$company_name'");
                $stmt->bind_param("ssssssssss", $Lqr_encode, $Inv_encode, $nla_n_encode, $Inv_ass_encode, $pm_encode, $sr_encode, $roi_encode, $nw_ta_encode, $regulat_encode, $company_name);              
                $result = ($stmt->execute()); 

            // Table 4

            $stmt = $conn->prepare("UPDATE fund_manager_trendanalysis SET t_over=?, pre_pro=?, fixed_asset=?, total_asset=?, inv_asset=?, equit=?, an=?, int_inc=?, liq_asset=?, net_liq=?, total_liab=?, net_liab=?, company=?
            WHERE company = '$company_name'");
                $stmt->bind_param("sssssssssssss", $t_over_encode, $pre_pro_encode, $fixed_asset_encode, $total_asset_encode, $inv_asset_encode, $equit_encode, $an_encode, $int_inc_encode, $liq_asset_encode, $net_liq_encode, $total_liab_encode, $net_liab_encode, $company_name);              
                $result = ($stmt->execute()); 
                if ( true===$result ) {
                    header("Location:$baseURL" . 'index.php?n=1');
                  }
                  else{
                   echo " Database error connecction";
                 }
            } catch (PDOException $e) {
                print_r($e->getMessage());
                        
            }

        mysqli_close($conn);
     }
//    End Update //

//------------**** DELETE USER INPUT **** -----------------------------//

    
    if(isset($_GET['company'])){
    $company_name = $_GET['company'];


    $query =  mysqli_query($conn, "DELETE fund_manager_requirements, fund_manager_computes, fund_manager_quantities, fund_manager_trendanalysis, fund_manager_templates_table,fund_manager_financial_table, fund_manager_account_table FROM fund_manager_requirements
                                                 INNER JOIN fund_manager_computes ON fund_manager_computes.company = fund_manager_requirements.company
                                                 INNER JOIN fund_manager_quantities ON fund_manager_quantities.company = fund_manager_requirements.company
                                                 INNER JOIN fund_manager_trendanalysis ON fund_manager_trendanalysis.company = fund_manager_requirements.company
                                                 INNER JOIN fund_manager_templates_table ON fund_manager_templates_table.company = fund_manager_requirements.company
                                                 INNER JOIN fund_manager_financial_table ON fund_manager_financial_table.company = fund_manager_requirements.company
                                                 INNER JOIN fund_manager_account_table ON fund_manager_account_table.company = fund_manager_requirements.company
                                                 WHERE fund_manager_requirements.company = '$company_name'");
    header("Location:https://fund-manager-tools-production.up.railway.app/index.php?m=1");
    // header("Location:https://fund-manager-tools-production.up.railway.app/index.php?m=1");
    }



//--------*** SAVE RISK INSERT DATA *******

if(isset($_POST['submitrisk_btn'])) {
    
    $risk_specification = $_POST['headers_specification'];
    $risk_score =  $_POST['headers_score'];
    $id = $_POST['id'];
    $company_name = $_POST['company'];
    $risk_analysis_encode = json_encode($risk_specification);
    $risk_score_encode = json_encode($risk_score);

    $stmt = $conn->prepare("INSERT INTO fund_manager_templates_table (risk_analysis, risk_score, id , company) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $risk_analysis_encode, $risk_score_encode, $id, $company_name);

try {
    $result = ($stmt->execute());
    if ( true===$result ) {
        header("Location:$baseURL" . 'index.php?n=1');
      }
   } catch (PDOException $e) {
    print_r($e->getMessage());
   
   }
mysqli_close($conn);
}

//------*** END SAVE RISK DATA ***** -------------//


    //------*** UPDATE RISK DATA ***** -------------//

if(isset($_POST['updaterisk_btn'])) {

    $risk_specification = $_POST['headers_specification'];
    $risk_score =  $_POST['headers_score'];
    $id = $_POST['id'];
    $company_name = $_POST['company'];
    $risk_analysis_encode = json_encode($risk_specification);
    $risk_score_encode = json_encode($risk_score);

    try {
        $stmtset = $conn->prepare("UPDATE fund_manager_templates_table SET risk_analysis=?, risk_score=?, company=?, id=? WHERE id=$id");
        $stmtset->bind_param("sssi", $risk_analysis_encode, $risk_score_encode,  $company_name, $id);
        $result = ($stmtset->execute());
        if ( true===$result ) {
            header("Location:$baseURL" . 'index.php?n=1');
          }
          else{
           echo " Database error connecction";
         }
       } catch (PDOException $e) {
        print_r($e->getMessage());
        //exit('Error connecting to database');   
       }
    mysqli_close($conn);
    }
    

//------*** END UPDATE RISK DATA ***** -------------//




//------*** SAVE YEARLY SCORE DATA FOR 3 YEARS***** -------------//



//------*** SAVE YEARLY SCORE DATA FOR 5 YEARS ***** -------------//



//--------*** SAVE FINANCIAL INSERT DATA *******

if(isset($_POST['submitFIN_btn'])) {
    
    $fin_specification = $_POST['headers_specification'];
    $fin_score =  $_POST['headers_score'];
    $id = $_POST['id'];
    $headers = $_POST['headers'];
    $fin_headers_encode = json_encode($headers);
    $company_name = $_POST['company'];
    $fin_analysis_encode = json_encode($fin_specification);
    $fin_score_encode = json_encode($fin_score);

    $stmt = $conn->prepare("INSERT INTO fund_manager_financial_table (fin_analysis, fin_score, id , headers, company) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $fin_analysis_encode, $fin_score_encode, $id, $fin_headers_encode, $company_name);

try {
    $result = ($stmt->execute());
    if ( true===$result ) {
        header("Location:$baseURL" . 'index.php?n=1');
      }
   } catch (PDOException $e) {
    print_r($e->getMessage());
   
   }
mysqli_close($conn);
}

//------*** END SAVE RISK DATA ***** -------------//

    //------*** UPDATE FINANCIAL DATA ***** -------------//

    if(isset($_POST['updateFIN_btn'])) {

        $fin_specification = $_POST['headers_specification'];
        $fin_score =  $_POST['headers_score'];
        $id = $_POST['id'];
        $headers = $_POST['headers'];
        $fin_headers_encode = $_POST[$headers];
        $company_name = $_POST['company'];
        $fin_analysis_encode = json_encode($fin_specification);
        $fin_score_encode = json_encode($fin_score);
    
        try {
            $stmtset = $conn->prepare("UPDATE fund_manager_financial_table SET fin_analysis=?, fin_score=?, headers=?, company=?, id=? WHERE id=$id");
            $stmtset->bind_param("ssssi", $fin_analysis_encode, $fin_score_encode, $fin_headers_headers, $company_name, $id);
            $result = ($stmtset->execute());
            if ( true===$result ) {
                header("Location:$baseURL" . 'index.php?n=1');
              }
              else{
               echo " Database error connecction";
             }
           } catch (PDOException $e) {
            print_r($e->getMessage());
            //exit('Error connecting to database');   
           }
        mysqli_close($conn);
        }

//--------*** SAVE ACCOUNT QUALITY INSERT DATA *******

if(isset($_POST['submitACCT_btn'])) {
    
    $acct_specification = $_POST['headers_specification'];
    $acct_score =  $_POST['headers_score'];
    $id = $_POST['id'];
    $company_name = $_POST['company'];
    $acct_analysis_encode = json_encode($acct_specification);
    $acct_score_encode = json_encode($acct_score);

    $stmt = $conn->prepare("INSERT INTO fund_manager_account_table (acct_analysis, acct_score, id , company) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $acct_analysis_encode, $acct_score_encode, $id, $company_name);

try {
    $result = ($stmt->execute());
    if ( true===$result ) {
        header("Location:$baseURL" . 'index.php?n=1');
      }
   } catch (PDOException $e) {
    print_r($e->getMessage());
   
   }
mysqli_close($conn);
}

//------*** END SAVE RISK DATA ***** -------------//

    //------*** UPDATE ACCOUNT DATA ***** -------------//

    if(isset($_POST['updateACCT_btn'])) {

        $acct_specification = $_POST['headers_specification'];
        $acct_score =  $_POST['headers_score'];
        $id = $_POST['id'];
        $company_name = $_POST['company'];
        $acct_analysis_encode = json_encode($acct_specification);
        $acct_score_encode = json_encode($acct_score);
    
        try {
            $stmtset = $conn->prepare("UPDATE fund_manager_account_table SET acct_analysis=?, acct_score=?, company=?, id=? WHERE id=$id");
            $stmtset->bind_param("sssi", $acct_analysis_encode, $acct_score_encode,  $company_name, $id);
            $result = ($stmtset->execute());
            if ( true===$result ) {
                header("Location:$baseURL" . 'index.php?n=1');
              }
              else{
               echo " Database error connecction";
             }
           } catch (PDOException $e) {
            print_r($e->getMessage());
            //exit('Error connecting to database');   
           }
        mysqli_close($conn);
        }

//--------*** SAVE GORVERNANCE INSERT DATA *******

if(isset($_POST['submitgov_btn'])) {
    
    $gov_specification = $_POST['headers_specification'];
    $gov_score =  $_POST['headers_score'];
    $id = $_POST['id'];
    $company_name = $_POST['company'];
    $gov_analysis_encode = json_encode($gov_specification);
    $gov_score_encode = json_encode($gov_score);

try {
    $stmt = $conn->prepare("INSERT INTO fund_manager_account_table (gov_analysis, gov_score, id , company) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $gov_analysis_encode, $gov_score_encode, $id, $company_name);


    $result = ($stmt->execute());
    if ( true===$result ) {
        header("Location:$baseURL" . 'index.php?n=1');
      }
   } catch (PDOException $e) {
    print_r($e->getMessage());
   
   }
mysqli_close($conn);
}

//------*** END SAVE RISK DATA ***** -------------//

// Financial Select // 

if(isset($_POST['fin_id'])) {

    $findata = $_POST['fin_id'];
    $finScore = trim($findata);
    $resultfin= mysqli_query($conn, "SELECT score FROM fund_manager_fin_score WHERE fin_id = '{$finScore}'"); // fin_score

    $to_encode =[];
    
    while($row = mysqli_fetch_array($resultfin)) {
        $to_encode = $row['score'];
    }
        echo json_decode($to_encode);  
}
// End Financial

//----**********   Account Quality    ********** ---------//

if(isset($_POST['acct_id'])) {

    $acctdata = $_POST['acct_id'];
    $acctScore = trim($acctdata);
    $resultacct= mysqli_query($conn, "SELECT score FROM fund_manager_acct_score WHERE acct_id = '{$acctScore}'");
    $to_encode =[];

    while($row = mysqli_fetch_array($resultacct)) {
        $to_encode = $row['score'];
    }
        echo json_decode($to_encode);
}

// ----- ************    Risk Table   **************** ---------- //

if(isset($_POST['risk_id'])) {

    $riskdata = $_POST['risk_id'];
    $riskScore = trim($riskdata);
    $resultrisk= mysqli_query($conn, "SELECT score FROM fund_manager_template_score WHERE risk_id = '{$riskScore}'");
    $to_encode =[];

    while($row = mysqli_fetch_array($resultrisk)) {
        $to_encode = $row['score'];
    }
        echo json_decode($to_encode);  
}


// ------ Submit Grade Score --------------------------------//
if(isset($_POST['submitGrade_btn'])) {
    $id = $_POST['id'];
    $company_name = $_POST['company'];
    // QTY
    $qty1 = $_POST['qty1'];
    $qty2 = $_POST['qty2'];
    $qty3 = $_POST['qty3'];
    
    $qty = [
        "qty1" => $qty1,
        "qty2" => $qty2,
        "qty3" => $qty3,
    ];
    $qty_encode = json_encode($qty);

    // RISK
    $risk1 = $_POST['risk1'];
    $risk2 = $_POST['risk2'];
    $risk3 = $_POST['risk3'];

    $risk = [
        "risk1" => $risk1,
        "risk2" => $risk2,
        "risk3" => $risk3,
    ];
    $risk_encode = json_encode($risk);

    // EQT
    $eqt1 = $_POST['eqt1'];
    $eqt2 = $_POST['eqt2'];
    $eqt3 = $_POST['eqt3'];

    $eqt = [
        "eqt1" => $eqt1,
        "eqt2" => $eqt2,
        "eqt3" => $eqt3,
    ];
    $eqt_encode = json_encode($eqt);

    // LIQ
    $liq1 = $_POST['liq1'];
    $liq2 = $_POST['liq2'];
    $liq3 = $_POST['liq3'];

    $liq = [
        "liq1" => $liq1,
        "liq2" => $liq2,
        "liq3" => $liq3,
    ];
    $liq_encode = json_encode($liq);

    // GOR
    $gor1 = $_POST['gor1'];
    $gor2 = $_POST['gor2'];
    $gor3 = $_POST['gor3'];

    $gor = [
        "gor1" => $gor1,
        "gor2" => $gor2,
        "gor3" => $gor3,
    ];
    $gor_encode = json_encode($gor);

    // DISK
    $disk_score1 = $_POST['disk_score1'];
    $disk_score2 = $_POST['disk_score2'];
    $disk_score3 = $_POST['disk_score3'];

    $disk_score = [
        "disk_score1" => $disk_score1,
        "disk_score2" => $disk_score2,
        "disk_score3" => $disk_score3,
    ];
    $disk_score_encode = json_encode($disk_score);

    // TOTAL
    $total1 = $_POST['total1'];
    $total2 = $_POST['total2'];
    $total3 = $_POST['total3'];

    $total = [
        "total1" => $total1,
        "total2" => $total2,
        "total3" => $total3,
    ];
    $total_encode = json_encode($total);

    // ANALYST GRADE
    $analyst_grade1 = $_POST['analyst_grade1'];
    $analyst_grade2 = $_POST['analyst_grade2'];
    $analyst_grade3 = $_POST['analyst_grade3'];

    $analyst_grade = [
        "analyst_grade1" => $analyst_grade1,
        "analyst_grade2" => $analyst_grade2,
        "analyst_grade3" => $analyst_grade3,
    ];
    $analyst_grade_encode = json_encode($analyst_grade);

    // $query = "INSERT INTO fund_manager_analyst_grade (qty, risk, eqt, liq, gor, disk_score, total, analyst_grade,id, company) VALUES ('$qty_encode', '$risk_encode', '$eqt_encode', '$liq_encode', '$gor_encode', '$disk_score_encode', '$total_encode', '$analyst_grade_encode', '$id', '$company_name')";
    // $query_run = mysqli_query($conn, $query);
    //     if($query_run) 
    //     {
    //     // header("Location:$baseURL" . 'index.php?n=1');
    //     $_SESSION["status"] = "Analyst Garde Saved Successfully";
    //     $_SESSION["status_code"] = "success";    
    //     header("Location:$baseURL" . 'resources/templates/pages/single.php?company='. $company_name);
    //    }
try {
    $stmt = $conn->prepare("INSERT INTO fund_manager_analyst_grade (qty, risk, eqt, liq, gor, disk_score, total, analyst_grade,id, company) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssis", $qty_encode, $risk_encode, $eqt_encode, $liq_encode, $gor_encode, $disk_score_encode, $total_encode, $analyst_grade_encode, $id, $company_name);
    $result = ($stmt->execute());
    if (true===$result) {
        $_SESSION['status'] = "Analyst Grade Saved Successfully";
        $_SESSION['status_code'] = "success";    
        header("Location:$baseURL" . 'resources/templates/pages/single.php?company='. $company_name);
      }
   } catch (PDOException $e) {
    print_r($e->getMessage());
   
   }
mysqli_close($conn);
}

?>