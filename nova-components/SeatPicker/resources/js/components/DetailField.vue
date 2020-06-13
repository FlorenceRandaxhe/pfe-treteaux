<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">

    <div class="legend">
        <ul class="legend__list">
            <li class="legend__item">
                <div class="legend__color legend__color--occupied"></div>
                <p class="legend__label">Occupé</p>
            </li>
            <li class="legend__item">
                <div class="legend__color legend__color--free"></div>
                <p class="legend__label">Libre</p>
            </li>
        </ul>
    </div>

    <svg class="seat__svg" width="1000" height="1725" viewBox="0 0 1376 2374" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle class="seat__circle circle" data-seat="seat_2" cx="227" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_4" cx="288" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_6" cx="349" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_8" cx="410" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_10" cx="471" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_12" cx="532" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_14" cx="593" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_16" cx="654" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_15" cx="715" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_13" cx="776" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_11" cx="837" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_9" cx="898" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_7" cx="959" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_5" cx="1020" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_3" cx="1081" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_1" cx="1142" cy="1983" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_18" cx="227" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_20" cx="288" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_22" cx="349" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_24" cx="410" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_26" cx="471" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_28" cx="532" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_30" cx="593" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_32" cx="654" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_31" cx="715" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_29" cx="776" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_27" cx="837" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_25" cx="898" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_23" cx="959" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_21" cx="1020" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_19" cx="1081" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_17" cx="1142" cy="1918" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_34" cx="227" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_36" cx="288" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_38" cx="349" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_40" cx="410" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_42" cx="471" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_44" cx="532" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_46" cx="593" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_48" cx="654" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_47" cx="715" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_45" cx="776" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_43" cx="837" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_41" cx="898" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_39" cx="959" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_37" cx="1020" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_35" cx="1081" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_33" cx="1142" cy="1853" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_50" cx="227" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_52" cx="288" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_54" cx="349" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_56" cx="410" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_58" cx="471" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_60" cx="532" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_62" cx="593" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_64" cx="654" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_63" cx="715" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_61" cx="776" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_59" cx="837" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_57" cx="898" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_55" cx="959" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_53" cx="1020" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_51" cx="1081" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_49" cx="1142" cy="1788" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_66" cx="227" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_68" cx="288" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_70" cx="349" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_72" cx="410" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_74" cx="471" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_76" cx="532" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_78" cx="593" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_80" cx="654" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_79" cx="715" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_77" cx="776" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_75" cx="837" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_73" cx="898" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_71" cx="959" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_69" cx="1020" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_67" cx="1081" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_65" cx="1142" cy="1723" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_82" cx="227" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_84" cx="288" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_86" cx="349" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_88" cx="410" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_90" cx="471" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_92" cx="532" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_94" cx="593" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_96" cx="654" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_95" cx="715" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_93" cx="776" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_91" cx="837" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_89" cx="898" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_87" cx="959" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_85" cx="1020" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_83" cx="1081" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_81" cx="1142" cy="1658" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_98" cx="227" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_100" cx="288" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_102" cx="349" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_104" cx="410" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_106" cx="471" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_108" cx="532" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_110" cx="593" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_112" cx="654" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_111" cx="715" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_109" cx="776" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_107" cx="837" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_105" cx="898" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_103" cx="959" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_101" cx="1020" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_99" cx="1081" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_97" cx="1142" cy="1593" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_114" cx="227" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_116" cx="288" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_118" cx="349" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_120" cx="410" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_122" cx="471" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_124" cx="532" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_126" cx="593" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_128" cx="654" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_127" cx="715" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_125" cx="776" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_123" cx="837" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_202" cx="293" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_204" cx="371" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_206" cx="449" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_208" cx="527" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_210" cx="605" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_212" cx="683" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_209" cx="761" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_207" cx="839" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_205" cx="917" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_203" cx="995" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_201" cx="1073" cy="1417" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_214" cx="334" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_216" cx="412" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_218" cx="490" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_220" cx="568" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_222" cx="646" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_219" cx="724" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_217" cx="802" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_215" cx="880" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_213" cx="958" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_211" cx="1036" cy="1341" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_224" cx="295" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_226" cx="373" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_228" cx="451" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_230" cx="529" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_232" cx="607" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_234" cx="685" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_229" cx="763" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_227" cx="841" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_225" cx="919" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_223" cx="997" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_221" cx="1075" cy="1265" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_236" cx="336" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_238" cx="414" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_240" cx="492" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_242" cx="570" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_244" cx="648" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_239" cx="726" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_237" cx="804" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_235" cx="882" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_233" cx="960" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_231" cx="1038" cy="1189" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_246" cx="295" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_248" cx="373" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_250" cx="451" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_252" cx="529" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_254" cx="607" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_256" cx="685" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_249" cx="763" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_247" cx="841" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_245" cx="919" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_243" cx="997" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_241" cx="1075" cy="1113" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_258" cx="334" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_260" cx="412" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_262" cx="490" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_264" cx="568" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_266" cx="646" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_259" cx="724" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_257" cx="802" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_255" cx="880" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_253" cx="958" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_251" cx="1036" cy="1037" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_268" cx="294" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_270" cx="372" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_272" cx="450" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_274" cx="528" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_276" cx="606" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_278" cx="684" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_269" cx="762" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_267" cx="840" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_265" cx="918" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_263" cx="996" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_261" cx="1074" cy="961" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_280" cx="335" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_282" cx="413" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_284" cx="491" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_286" cx="569" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_288" cx="647" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_279" cx="725" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_277" cx="803" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_275" cx="881" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_273" cx="959" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_271" cx="1037" cy="885" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_290" cx="296" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_292" cx="374" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_294" cx="452" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_296" cx="530" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_298" cx="608" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_300" cx="686" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_289" cx="764" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_287" cx="842" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_285" cx="920" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_283" cx="998" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_281" cx="1076" cy="809" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_302" cx="337" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_304" cx="415" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_306" cx="493" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_308" cx="571" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_310" cx="649" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_299" cx="727" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_297" cx="805" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_295" cx="883" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_293" cx="961" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_291" cx="1039" cy="733" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_312" cx="296" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_314" cx="374" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_316" cx="452" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_318" cx="530" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_320" cx="608" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_322" cx="686" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_309" cx="764" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_307" cx="842" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_305" cx="920" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_303" cx="998" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_301" cx="1076" cy="657" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_324" cx="337" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_326" cx="415" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_328" cx="493" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_330" cx="571" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_332" cx="649" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_319" cx="727" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_317" cx="805" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_315" cx="883" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_313" cx="961" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_311" cx="1039" cy="581" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_334" cx="294" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_336" cx="372" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_338" cx="450" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_340" cx="528" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_342" cx="606" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_344" cx="684" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_329" cx="762" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_327" cx="840" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_325" cx="918" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_323" cx="996" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_321" cx="1074" cy="505" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_346" cx="335" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_348" cx="413" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_350" cx="491" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_352" cx="569" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_354" cx="647" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_339" cx="725" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_337" cx="803" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_335" cx="881" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_333" cx="959" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_331" cx="1037" cy="429" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_356" cx="296" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_358" cx="374" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_360" cx="452" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_362" cx="530" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_364" cx="608" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_366" cx="686" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_349" cx="764" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_347" cx="842" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_345" cx="920" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_343" cx="998" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_341" cx="1076" cy="353" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_368" cx="337" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_370" cx="415" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_372" cx="493" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_374" cx="571" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_376" cx="649" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_359" cx="727" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_357" cx="805" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_355" cx="883" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_353" cx="961" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_351" cx="1039" cy="277" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_378" cx="296" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_380" cx="374" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_382" cx="452" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_384" cx="530" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_386" cx="608" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_388" cx="686" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_369" cx="764" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_367" cx="842" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_365" cx="920" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_363" cx="998" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_361" cx="1076" cy="201" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_390" cx="337" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_392" cx="259" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_394" cx="181" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_396" cx="415" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_398" cx="493" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_400" cx="571" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_402" cx="649" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_383" cx="727" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_381" cx="805" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_379" cx="883" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_377" cx="961" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_375" cx="1039" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_373" cx="1117" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_371" cx="1195" cy="125" r="25" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_121" cx="898" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_119" cx="959" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_117" cx="1020" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_115" cx="1081" cy="1528" r="20" fill="#C2E4D4"/>
<circle class="seat__circle circle" data-seat="seat_113" cx="1142" cy="1528" r="20" fill="#C2E4D4"/>
<path d="M1290 2374V2212C1290 2188.25 1270.75 2169 1247 2169H130C106.252 2169 87 2188.25 87 2212V2374" stroke="#D3D5E2" stroke-width="18"/>
<path d="M594.824 2266.85C594.504 2267.36 594.163 2267.74 593.8 2268C593.459 2268.26 593.011 2268.38 592.456 2268.38C591.965 2268.38 591.432 2268.23 590.856 2267.94C590.301 2267.62 589.661 2267.26 588.936 2266.88C588.232 2266.5 587.421 2266.15 586.504 2265.86C585.587 2265.54 584.541 2265.38 583.368 2265.38C581.341 2265.38 579.827 2265.81 578.824 2266.69C577.843 2267.54 577.352 2268.7 577.352 2270.18C577.352 2271.11 577.651 2271.89 578.248 2272.51C578.845 2273.13 579.624 2273.66 580.584 2274.11C581.565 2274.56 582.675 2274.98 583.912 2275.36C585.171 2275.72 586.451 2276.14 587.752 2276.61C589.053 2277.06 590.323 2277.59 591.56 2278.21C592.819 2278.83 593.928 2279.62 594.888 2280.58C595.869 2281.54 596.659 2282.71 597.256 2284.1C597.853 2285.46 598.152 2287.11 598.152 2289.06C598.152 2291.21 597.779 2293.23 597.032 2295.1C596.285 2296.98 595.197 2298.62 593.768 2300.03C592.36 2301.42 590.611 2302.52 588.52 2303.33C586.451 2304.12 584.093 2304.51 581.448 2304.51C579.997 2304.51 578.515 2304.36 577 2304.06C575.507 2303.77 574.056 2303.35 572.648 2302.82C571.24 2302.26 569.917 2301.61 568.68 2300.86C567.443 2300.12 566.365 2299.29 565.448 2298.37L568.648 2293.31C568.883 2292.93 569.213 2292.62 569.64 2292.38C570.067 2292.15 570.525 2292.03 571.016 2292.03C571.656 2292.03 572.296 2292.23 572.936 2292.64C573.597 2293.05 574.333 2293.49 575.144 2293.98C575.976 2294.47 576.925 2294.92 577.992 2295.33C579.059 2295.73 580.317 2295.94 581.768 2295.94C583.731 2295.94 585.256 2295.51 586.344 2294.66C587.432 2293.78 587.976 2292.41 587.976 2290.53C587.976 2289.44 587.677 2288.55 587.08 2287.87C586.483 2287.19 585.693 2286.62 584.712 2286.18C583.752 2285.73 582.653 2285.33 581.416 2284.99C580.179 2284.65 578.909 2284.28 577.608 2283.87C576.307 2283.45 575.037 2282.93 573.8 2282.34C572.563 2281.72 571.453 2280.92 570.472 2279.94C569.512 2278.93 568.733 2277.7 568.136 2276.22C567.539 2274.73 567.24 2272.9 567.24 2270.72C567.24 2268.97 567.592 2267.26 568.296 2265.6C569 2263.94 570.035 2262.45 571.4 2261.15C572.765 2259.85 574.44 2258.82 576.424 2258.05C578.408 2257.26 580.68 2256.86 583.24 2256.86C584.669 2256.86 586.056 2256.98 587.4 2257.22C588.765 2257.43 590.056 2257.76 591.272 2258.21C592.488 2258.63 593.619 2259.16 594.664 2259.78C595.731 2260.37 596.68 2261.06 597.512 2261.82L594.824 2266.85ZM647.016 2291.94C647.272 2291.94 647.528 2291.99 647.784 2292.1C648.04 2292.18 648.285 2292.34 648.52 2292.58L652.808 2297.09C650.93 2299.54 648.573 2301.4 645.736 2302.66C642.92 2303.89 639.581 2304.51 635.72 2304.51C632.178 2304.51 629 2303.91 626.184 2302.72C623.389 2301.5 621.01 2299.84 619.048 2297.73C617.106 2295.59 615.613 2293.08 614.567 2290.18C613.522 2287.25 612.999 2284.09 612.999 2280.67C612.999 2277.19 613.597 2274.01 614.792 2271.1C615.986 2268.18 617.65 2265.66 619.784 2263.55C621.938 2261.44 624.509 2259.8 627.496 2258.62C630.482 2257.45 633.778 2256.86 637.384 2256.86C639.133 2256.86 640.776 2257.02 642.312 2257.34C643.869 2257.64 645.32 2258.07 646.664 2258.62C648.008 2259.16 649.245 2259.81 650.376 2260.58C651.506 2261.32 652.509 2262.15 653.384 2263.07L649.736 2267.97C649.501 2268.27 649.224 2268.54 648.904 2268.8C648.584 2269.03 648.136 2269.15 647.56 2269.15C647.176 2269.15 646.813 2269.07 646.472 2268.9C646.13 2268.73 645.768 2268.52 645.384 2268.29C645 2268.03 644.573 2267.77 644.104 2267.49C643.656 2267.19 643.112 2266.92 642.472 2266.69C641.853 2266.43 641.117 2266.22 640.264 2266.05C639.432 2265.88 638.45 2265.79 637.32 2265.79C635.357 2265.79 633.565 2266.14 631.944 2266.85C630.322 2267.53 628.925 2268.52 627.752 2269.82C626.6 2271.1 625.693 2272.66 625.032 2274.5C624.392 2276.33 624.072 2278.39 624.072 2280.67C624.072 2283.06 624.392 2285.18 625.032 2287.04C625.693 2288.9 626.578 2290.46 627.688 2291.74C628.818 2293 630.13 2293.96 631.624 2294.62C633.117 2295.29 634.717 2295.62 636.424 2295.62C637.405 2295.62 638.301 2295.57 639.112 2295.49C639.922 2295.38 640.669 2295.21 641.352 2294.98C642.056 2294.74 642.717 2294.44 643.336 2294.08C643.976 2293.7 644.616 2293.23 645.256 2292.67C645.512 2292.46 645.789 2292.29 646.088 2292.16C646.386 2292.01 646.696 2291.94 647.016 2291.94ZM699.926 2257.38V2265.7H680.79V2276.58H695.446V2284.58H680.79V2295.68H699.926V2304H669.91V2257.38H699.926ZM681.43 2246.46C681.921 2246.46 682.347 2246.5 682.71 2246.56C683.094 2246.6 683.425 2246.69 683.702 2246.82C684.001 2246.92 684.278 2247.08 684.534 2247.3C684.79 2247.49 685.057 2247.73 685.334 2248.03L691.158 2254.37H683.286C682.902 2254.37 682.571 2254.36 682.294 2254.34C682.017 2254.31 681.75 2254.27 681.494 2254.21C681.259 2254.12 681.025 2254.03 680.79 2253.92C680.577 2253.79 680.342 2253.63 680.086 2253.44L670.486 2246.46H681.43ZM723.953 2257.38C724.423 2257.38 724.817 2257.4 725.137 2257.44C725.457 2257.48 725.745 2257.57 726.001 2257.7C726.257 2257.8 726.503 2257.96 726.737 2258.18C726.972 2258.39 727.239 2258.68 727.537 2259.04L749.681 2287.04C749.596 2286.14 749.532 2285.28 749.489 2284.45C749.447 2283.59 749.425 2282.79 749.425 2282.05V2257.38H758.961V2304H753.329C752.497 2304 751.793 2303.87 751.217 2303.62C750.641 2303.36 750.087 2302.89 749.553 2302.21L727.569 2274.43C727.633 2275.24 727.687 2276.04 727.729 2276.83C727.772 2277.6 727.793 2278.33 727.793 2279.01V2304H718.257V2257.38H723.953ZM808.809 2257.38V2265.7H789.672V2276.58H804.329V2284.58H789.672V2295.68H808.809V2304H778.792V2257.38H808.809Z" fill="#D3D5E2"/>
<path d="M599.632 2060.84V2070H594.79V2043.97H603.268C605.008 2043.97 606.514 2044.18 607.786 2044.58C609.058 2044.99 610.108 2045.56 610.936 2046.29C611.764 2047.03 612.376 2047.9 612.772 2048.92C613.168 2049.94 613.366 2051.06 613.366 2052.27C613.366 2053.53 613.156 2054.69 612.736 2055.74C612.316 2056.79 611.686 2057.69 610.846 2058.44C610.006 2059.2 608.956 2059.79 607.696 2060.21C606.436 2060.63 604.96 2060.84 603.268 2060.84H599.632ZM599.632 2057.06H603.268C604.156 2057.06 604.93 2056.95 605.59 2056.73C606.25 2056.51 606.796 2056.19 607.228 2055.78C607.66 2055.36 607.984 2054.86 608.2 2054.27C608.416 2053.67 608.524 2053 608.524 2052.27C608.524 2051.57 608.416 2050.94 608.2 2050.38C607.984 2049.82 607.66 2049.34 607.228 2048.94C606.796 2048.54 606.25 2048.24 605.59 2048.04C604.93 2047.82 604.156 2047.72 603.268 2047.72H599.632V2057.06ZM639.389 2070H635.645C635.225 2070 634.877 2069.9 634.601 2069.69C634.337 2069.48 634.145 2069.21 634.025 2068.9L632.081 2063.59H621.299L619.355 2068.9C619.259 2069.18 619.067 2069.43 618.779 2069.66C618.503 2069.89 618.161 2070 617.753 2070H613.991L624.215 2043.97H629.165L639.389 2070ZM622.541 2060.17H630.839L627.671 2051.51C627.527 2051.13 627.365 2050.68 627.185 2050.16C627.017 2049.64 626.849 2049.07 626.681 2048.45C626.513 2049.07 626.345 2049.64 626.177 2050.16C626.021 2050.69 625.865 2051.15 625.709 2051.55L622.541 2060.17ZM649.233 2059.83V2070H644.391V2043.97H652.329C654.105 2043.97 655.623 2044.16 656.883 2044.53C658.155 2044.89 659.193 2045.4 659.997 2046.06C660.813 2046.72 661.407 2047.51 661.779 2048.44C662.163 2049.35 662.355 2050.36 662.355 2051.46C662.355 2052.34 662.223 2053.16 661.959 2053.94C661.707 2054.72 661.335 2055.43 660.843 2056.07C660.363 2056.7 659.763 2057.26 659.043 2057.74C658.335 2058.22 657.525 2058.61 656.613 2058.89C657.225 2059.24 657.753 2059.74 658.197 2060.39L664.713 2070H660.357C659.937 2070 659.577 2069.92 659.277 2069.75C658.989 2069.58 658.743 2069.34 658.539 2069.03L653.067 2060.69C652.863 2060.38 652.635 2060.16 652.383 2060.03C652.143 2059.9 651.783 2059.83 651.303 2059.83H649.233ZM649.233 2056.36H652.257C653.169 2056.36 653.961 2056.24 654.633 2056.01C655.317 2055.79 655.875 2055.47 656.307 2055.08C656.751 2054.67 657.081 2054.19 657.297 2053.64C657.513 2053.09 657.621 2052.48 657.621 2051.82C657.621 2050.5 657.183 2049.49 656.307 2048.78C655.443 2048.07 654.117 2047.72 652.329 2047.72H649.233V2056.36ZM687.302 2043.97V2047.95H679.472V2070H674.63V2047.95H666.764V2043.97H687.302ZM708.946 2043.97V2047.82H697.408V2055.04H706.498V2058.77H697.408V2066.13H708.946V2070H692.53V2043.97H708.946ZM720.295 2059.83V2070H715.453V2043.97H723.391C725.167 2043.97 726.685 2044.16 727.945 2044.53C729.217 2044.89 730.255 2045.4 731.059 2046.06C731.875 2046.72 732.469 2047.51 732.841 2048.44C733.225 2049.35 733.417 2050.36 733.417 2051.46C733.417 2052.34 733.285 2053.16 733.021 2053.94C732.769 2054.72 732.397 2055.43 731.905 2056.07C731.425 2056.7 730.825 2057.26 730.105 2057.74C729.397 2058.22 728.587 2058.61 727.675 2058.89C728.287 2059.24 728.815 2059.74 729.259 2060.39L735.775 2070H731.419C730.999 2070 730.639 2069.92 730.339 2069.75C730.051 2069.58 729.805 2069.34 729.601 2069.03L724.129 2060.69C723.925 2060.38 723.697 2060.16 723.445 2060.03C723.205 2059.9 722.845 2059.83 722.365 2059.83H720.295ZM720.295 2056.36H723.319C724.231 2056.36 725.023 2056.24 725.695 2056.01C726.379 2055.79 726.937 2055.47 727.369 2055.08C727.813 2054.67 728.143 2054.19 728.359 2053.64C728.575 2053.09 728.683 2052.48 728.683 2051.82C728.683 2050.5 728.245 2049.49 727.369 2048.78C726.505 2048.07 725.179 2047.72 723.391 2047.72H720.295V2056.36ZM746.045 2059.83V2070H741.203V2043.97H749.141C750.917 2043.97 752.435 2044.16 753.695 2044.53C754.967 2044.89 756.005 2045.4 756.809 2046.06C757.625 2046.72 758.219 2047.51 758.591 2048.44C758.975 2049.35 759.167 2050.36 759.167 2051.46C759.167 2052.34 759.035 2053.16 758.771 2053.94C758.519 2054.72 758.147 2055.43 757.655 2056.07C757.175 2056.7 756.575 2057.26 755.855 2057.74C755.147 2058.22 754.337 2058.61 753.425 2058.89C754.037 2059.24 754.565 2059.74 755.009 2060.39L761.525 2070H757.169C756.749 2070 756.389 2069.92 756.089 2069.75C755.801 2069.58 755.555 2069.34 755.351 2069.03L749.879 2060.69C749.675 2060.38 749.447 2060.16 749.195 2060.03C748.955 2059.9 748.595 2059.83 748.115 2059.83H746.045ZM746.045 2056.36H749.069C749.981 2056.36 750.773 2056.24 751.445 2056.01C752.129 2055.79 752.687 2055.47 753.119 2055.08C753.563 2054.67 753.893 2054.19 754.109 2053.64C754.325 2053.09 754.433 2052.48 754.433 2051.82C754.433 2050.5 753.995 2049.49 753.119 2048.78C752.255 2048.07 750.929 2047.72 749.141 2047.72H746.045V2056.36ZM783.207 2043.97V2047.82H771.669V2055.04H780.759V2058.77H771.669V2066.13H783.207V2070H766.791V2043.97H783.207Z" fill="#D3D5E2"/>
<path d="M620.044 40.972V44.824H608.506V52.042H617.596V55.768H608.506V63.13H620.044V67H603.628V40.972H620.044ZM640.7 45.706C640.568 45.97 640.412 46.156 640.232 46.264C640.064 46.372 639.86 46.426 639.62 46.426C639.38 46.426 639.11 46.336 638.81 46.156C638.51 45.964 638.156 45.754 637.748 45.526C637.34 45.298 636.86 45.094 636.308 44.914C635.768 44.722 635.126 44.626 634.382 44.626C633.71 44.626 633.122 44.71 632.618 44.878C632.126 45.034 631.706 45.256 631.358 45.544C631.022 45.832 630.77 46.18 630.602 46.588C630.434 46.984 630.35 47.422 630.35 47.902C630.35 48.514 630.518 49.024 630.854 49.432C631.202 49.84 631.658 50.188 632.222 50.476C632.786 50.764 633.428 51.022 634.148 51.25C634.868 51.478 635.6 51.724 636.344 51.988C637.1 52.24 637.838 52.54 638.558 52.888C639.278 53.224 639.92 53.656 640.484 54.184C641.048 54.7 641.498 55.336 641.834 56.092C642.182 56.848 642.356 57.766 642.356 58.846C642.356 60.022 642.152 61.126 641.744 62.158C641.348 63.178 640.76 64.072 639.98 64.84C639.212 65.596 638.27 66.196 637.154 66.64C636.038 67.072 634.76 67.288 633.32 67.288C632.492 67.288 631.676 67.204 630.872 67.036C630.068 66.88 629.294 66.652 628.55 66.352C627.818 66.052 627.128 65.692 626.48 65.272C625.844 64.852 625.274 64.384 624.77 63.868L626.174 61.546C626.306 61.378 626.462 61.24 626.642 61.132C626.834 61.012 627.044 60.952 627.272 60.952C627.572 60.952 627.896 61.078 628.244 61.33C628.592 61.57 629 61.84 629.468 62.14C629.948 62.44 630.506 62.716 631.142 62.968C631.79 63.208 632.564 63.328 633.464 63.328C634.844 63.328 635.912 63.004 636.668 62.356C637.424 61.696 637.802 60.754 637.802 59.53C637.802 58.846 637.628 58.288 637.28 57.856C636.944 57.424 636.494 57.064 635.93 56.776C635.366 56.476 634.724 56.224 634.004 56.02C633.284 55.816 632.552 55.594 631.808 55.354C631.064 55.114 630.332 54.826 629.612 54.49C628.892 54.154 628.25 53.716 627.686 53.176C627.122 52.636 626.666 51.964 626.318 51.16C625.982 50.344 625.814 49.342 625.814 48.154C625.814 47.206 626 46.282 626.372 45.382C626.756 44.482 627.308 43.684 628.028 42.988C628.76 42.292 629.654 41.734 630.71 41.314C631.766 40.894 632.972 40.684 634.328 40.684C635.864 40.684 637.28 40.924 638.576 41.404C639.872 41.884 640.976 42.556 641.888 43.42L640.7 45.706ZM666.912 40.972V44.95H659.082V67H654.24V44.95H646.374V40.972H666.912ZM677.504 56.83V67H672.662V40.972H680.6C682.376 40.972 683.894 41.158 685.154 41.53C686.426 41.89 687.464 42.4 688.268 43.06C689.084 43.72 689.678 44.512 690.05 45.436C690.434 46.348 690.626 47.356 690.626 48.46C690.626 49.336 690.494 50.164 690.23 50.944C689.978 51.724 689.606 52.432 689.114 53.068C688.634 53.704 688.034 54.262 687.314 54.742C686.606 55.222 685.796 55.606 684.884 55.894C685.496 56.242 686.024 56.74 686.468 57.388L692.984 67H688.628C688.208 67 687.848 66.916 687.548 66.748C687.26 66.58 687.014 66.34 686.81 66.028L681.338 57.694C681.134 57.382 680.906 57.16 680.654 57.028C680.414 56.896 680.054 56.83 679.574 56.83H677.504ZM677.504 53.356H680.528C681.44 53.356 682.232 53.242 682.904 53.014C683.588 52.786 684.146 52.474 684.578 52.078C685.022 51.67 685.352 51.19 685.568 50.638C685.784 50.086 685.892 49.48 685.892 48.82C685.892 47.5 685.454 46.486 684.578 45.778C683.714 45.07 682.388 44.716 680.6 44.716H677.504V53.356ZM721.488 67H717.744C717.324 67 716.976 66.898 716.7 66.694C716.436 66.478 716.244 66.214 716.124 65.902L714.18 60.592H703.398L701.454 65.902C701.358 66.178 701.166 66.43 700.878 66.658C700.602 66.886 700.26 67 699.852 67H696.09L706.314 40.972H711.264L721.488 67ZM704.64 57.172H712.938L709.77 48.514C709.626 48.13 709.464 47.68 709.284 47.164C709.116 46.636 708.948 46.066 708.78 45.454C708.612 46.066 708.444 46.636 708.276 47.164C708.12 47.692 707.964 48.154 707.808 48.55L704.64 57.172ZM749.801 53.986C749.801 55.894 749.483 57.646 748.847 59.242C748.211 60.838 747.317 62.212 746.165 63.364C745.013 64.516 743.627 65.41 742.007 66.046C740.387 66.682 738.593 67 736.625 67H726.689V40.972H736.625C738.593 40.972 740.387 41.296 742.007 41.944C743.627 42.58 745.013 43.474 746.165 44.626C747.317 45.766 748.211 47.134 748.847 48.73C749.483 50.326 749.801 52.078 749.801 53.986ZM744.851 53.986C744.851 52.558 744.659 51.28 744.275 50.152C743.891 49.012 743.345 48.052 742.637 47.272C741.929 46.48 741.065 45.874 740.045 45.454C739.037 45.034 737.897 44.824 736.625 44.824H731.567V63.148H736.625C737.897 63.148 739.037 62.938 740.045 62.518C741.065 62.098 741.929 61.498 742.637 60.718C743.345 59.926 743.891 58.966 744.275 57.838C744.659 56.698 744.851 55.414 744.851 53.986ZM772.519 40.972V44.824H760.981V52.042H770.071V55.768H760.981V63.13H772.519V67H756.103V40.972H772.519Z" fill="#D3D5E2"/>
</svg>

            <!-- <input
                :id="field.name"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
                v-model="value"
            /> -->

        </template>
    </default-field>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    mounted() {
        this.getOccupiedSeat();
    },

    methods: {
        getOccupiedSeat() {
            this.seats = document.querySelectorAll('circle');
            for (const key in this.field.value) {
                for (let i = 0; i < this.seats.length; i++)
                if (key === this.seats[i].dataset.seat && this.field.value[key] == 1) {
                    this.seats[i].setAttribute('data-occup', 'true')
                    this.seats[i].classList.add('seat__circle--occupied')
                }
            }
        }
    },
}
</script>

<style scoped>
    .seat__circle{
        fill: #d0d3dd;
    }
    .seat__circle--occupied{
        fill: #55628c;
    }
    .legend{
        width: 100%;
    }
    .legend__list{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px;
        //background-color: #F9F9F9;
        //border-radius: 5px;
        //box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
    }
    .legend__item{
        margin: 0 20px;
        list-style: none;
        display: flex;
        align-items: center;
    }
    .legend__color{
        margin-right: 15px;
        width: 20px;
        height: 20px;
        border-radius: 100%;
    }
    .legend__color--free{
        background-color: #d0d3dd;
    }
    .legend__color--occupied{
        background-color: #55628c;
    }
</style>