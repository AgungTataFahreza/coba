<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>

</html>

<?php

$result = json_decode('[
    {
        "lat": 5.57146,
        "lng": 95.37146
    },
    {
        "lat": 5.5715,
        "lng": 95.37146
    },
    {
        "lat": 5.5715,
        "lng": 95.37146
    },
    {
        "lat": 5.5715,
        "lng": 95.37118
    },
    {
        "lat": 5.5715,
        "lng": 95.37086
    },
    {
        "lat": 5.57153,
        "lng": 95.37009
    },
    {
        "lat": 5.57154,
        "lng": 95.36963
    },
    {
        "lat": 5.57156,
        "lng": 95.36903
    },
    {
        "lat": 5.57157,
        "lng": 95.36898
    },
    {
        "lat": 5.57157,
        "lng": 95.36876
    },
    {
        "lat": 5.57159,
        "lng": 95.36855
    },
    {
        "lat": 5.5716,
        "lng": 95.36842
    },
    {
        "lat": 5.57161,
        "lng": 95.36821
    },
    {
        "lat": 5.57162,
        "lng": 95.3681
    },
    {
        "lat": 5.57164,
        "lng": 95.368
    },
    {
        "lat": 5.57168,
        "lng": 95.36774
    },
    {
        "lat": 5.5717,
        "lng": 95.36767
    },
    {
        "lat": 5.5717,
        "lng": 95.36767
    },
    {
        "lat": 5.57172,
        "lng": 95.36761
    },
    {
        "lat": 5.57179,
        "lng": 95.36762
    },
    {
        "lat": 5.57204,
        "lng": 95.36763
    },
    {
        "lat": 5.5726,
        "lng": 95.36767
    },
    {
        "lat": 5.57343,
        "lng": 95.36771
    },
    {
        "lat": 5.57375,
        "lng": 95.36773
    },
    {
        "lat": 5.574,
        "lng": 95.36775
    },
    {
        "lat": 5.574,
        "lng": 95.36775
    },
    {
        "lat": 5.57406,
        "lng": 95.36681
    },
    {
        "lat": 5.57406,
        "lng": 95.36681
    },
    {
        "lat": 5.57409,
        "lng": 95.36616
    },
    {
        "lat": 5.57412,
        "lng": 95.36557
    },
    {
        "lat": 5.57412,
        "lng": 95.36548
    },
    {
        "lat": 5.57412,
        "lng": 95.36545
    },
    {
        "lat": 5.57411,
        "lng": 95.36542
    },
    {
        "lat": 5.57411,
        "lng": 95.36542
    },
    {
        "lat": 5.57402,
        "lng": 95.36545
    },
    {
        "lat": 5.57391,
        "lng": 95.36549
    },
    {
        "lat": 5.57391,
        "lng": 95.36549
    },
    {
        "lat": 5.57391,
        "lng": 95.36549
    },
    {
        "lat": 5.57267,
        "lng": 95.36598
    },
    {
        "lat": 5.57255,
        "lng": 95.36602
    },
    {
        "lat": 5.57248,
        "lng": 95.36605
    },
    {
        "lat": 5.57243,
        "lng": 95.36606
    },
    {
        "lat": 5.57238,
        "lng": 95.36607
    },
    {
        "lat": 5.57234,
        "lng": 95.36607
    },
    {
        "lat": 5.57231,
        "lng": 95.36607
    },
    {
        "lat": 5.57225,
        "lng": 95.36607
    },
    {
        "lat": 5.57225,
        "lng": 95.36607
    },
    {
        "lat": 5.57217,
        "lng": 95.36603
    },
    {
        "lat": 5.57229,
        "lng": 95.36567
    },
    {
        "lat": 5.57231,
        "lng": 95.36561
    },
    {
        "lat": 5.57248,
        "lng": 95.36502
    },
    {
        "lat": 5.57251,
        "lng": 95.36492
    },
    {
        "lat": 5.57257,
        "lng": 95.36472
    },
    {
        "lat": 5.57259,
        "lng": 95.36463
    },
    {
        "lat": 5.5727,
        "lng": 95.36422
    },
    {
        "lat": 5.57278,
        "lng": 95.36391
    },
    {
        "lat": 5.57281,
        "lng": 95.36383
    },
    {
        "lat": 5.57297,
        "lng": 95.36322
    },
    {
        "lat": 5.57309,
        "lng": 95.36282
    },
    {
        "lat": 5.5732,
        "lng": 95.36244
    },
    {
        "lat": 5.57323,
        "lng": 95.36236
    },
    {
        "lat": 5.57328,
        "lng": 95.36221
    },
    {
        "lat": 5.57333,
        "lng": 95.36203
    },
    {
        "lat": 5.57336,
        "lng": 95.36176
    },
    {
        "lat": 5.57338,
        "lng": 95.36147
    },
    {
        "lat": 5.57338,
        "lng": 95.36137
    },
    {
        "lat": 5.57337,
        "lng": 95.36131
    },
    {
        "lat": 5.57334,
        "lng": 95.36124
    },
    {
        "lat": 5.57329,
        "lng": 95.36115
    },
    {
        "lat": 5.57323,
        "lng": 95.36107
    },
    {
        "lat": 5.57313,
        "lng": 95.36091
    },
    {
        "lat": 5.57309,
        "lng": 95.36084
    },
    {
        "lat": 5.57288,
        "lng": 95.36052
    },
    {
        "lat": 5.5715,
        "lng": 95.35838
    },
    {
        "lat": 5.57146,
        "lng": 95.35833
    },
    {
        "lat": 5.57128,
        "lng": 95.35808
    },
    {
        "lat": 5.57123,
        "lng": 95.35795
    },
    {
        "lat": 5.57119,
        "lng": 95.35782
    },
    {
        "lat": 5.57117,
        "lng": 95.35773
    },
    {
        "lat": 5.57117,
        "lng": 95.35764
    },
    {
        "lat": 5.57117,
        "lng": 95.35755
    },
    {
        "lat": 5.57119,
        "lng": 95.35746
    },
    {
        "lat": 5.57122,
        "lng": 95.35737
    },
    {
        "lat": 5.57125,
        "lng": 95.35731
    },
    {
        "lat": 5.57127,
        "lng": 95.35723
    },
    {
        "lat": 5.57132,
        "lng": 95.35716
    },
    {
        "lat": 5.57138,
        "lng": 95.35706
    },
    {
        "lat": 5.57144,
        "lng": 95.357
    },
    {
        "lat": 5.57158,
        "lng": 95.35688
    },
    {
        "lat": 5.57185,
        "lng": 95.35672
    },
    {
        "lat": 5.572,
        "lng": 95.35665
    },
    {
        "lat": 5.57259,
        "lng": 95.35637
    },
    {
        "lat": 5.57302,
        "lng": 95.35616
    },
    {
        "lat": 5.57313,
        "lng": 95.3561
    },
    {
        "lat": 5.5737,
        "lng": 95.35581
    },
    {
        "lat": 5.57407,
        "lng": 95.35564
    },
    {
        "lat": 5.57429,
        "lng": 95.35554
    },
    {
        "lat": 5.57476,
        "lng": 95.35534
    },
    {
        "lat": 5.5751,
        "lng": 95.35523
    },
    {
        "lat": 5.57532,
        "lng": 95.35518
    },
    {
        "lat": 5.57555,
        "lng": 95.35513
    },
    {
        "lat": 5.57555,
        "lng": 95.35513
    },
    {
        "lat": 5.57555,
        "lng": 95.35513
    },
    {
        "lat": 5.57571,
        "lng": 95.35509
    },
    {
        "lat": 5.57608,
        "lng": 95.355
    },
    {
        "lat": 5.57665,
        "lng": 95.35488
    },
    {
        "lat": 5.57702,
        "lng": 95.3548
    },
    {
        "lat": 5.5772,
        "lng": 95.35476
    },
    {
        "lat": 5.57771,
        "lng": 95.35465
    },
    {
        "lat": 5.57779,
        "lng": 95.35463
    },
    {
        "lat": 5.57794,
        "lng": 95.3546
    },
    {
        "lat": 5.57799,
        "lng": 95.3546
    },
    {
        "lat": 5.57808,
        "lng": 95.35458
    },
    {
        "lat": 5.57822,
        "lng": 95.35456
    },
    {
        "lat": 5.57858,
        "lng": 95.35452
    },
    {
        "lat": 5.57894,
        "lng": 95.35448
    },
    {
        "lat": 5.57901,
        "lng": 95.35446
    },
    {
        "lat": 5.57916,
        "lng": 95.35444
    },
    {
        "lat": 5.57937,
        "lng": 95.3544
    },
    {
        "lat": 5.5795,
        "lng": 95.35437
    },
    {
        "lat": 5.57968,
        "lng": 95.35433
    },
    {
        "lat": 5.57995,
        "lng": 95.35426
    },
    {
        "lat": 5.5801,
        "lng": 95.35421
    },
    {
        "lat": 5.58029,
        "lng": 95.35411
    },
    {
        "lat": 5.58035,
        "lng": 95.35408
    },
    {
        "lat": 5.58038,
        "lng": 95.35406
    },
    {
        "lat": 5.58042,
        "lng": 95.35404
    },
    {
        "lat": 5.58046,
        "lng": 95.35398
    },
    {
        "lat": 5.5805,
        "lng": 95.35393
    },
    {
        "lat": 5.58052,
        "lng": 95.35387
    },
    {
        "lat": 5.58054,
        "lng": 95.35382
    },
    {
        "lat": 5.58055,
        "lng": 95.35376
    },
    {
        "lat": 5.58055,
        "lng": 95.35376
    },
    {
        "lat": 5.58054,
        "lng": 95.35371
    },
    {
        "lat": 5.58054,
        "lng": 95.35371
    },
    {
        "lat": 5.58051,
        "lng": 95.35362
    },
    {
        "lat": 5.58049,
        "lng": 95.35358
    },
    {
        "lat": 5.58046,
        "lng": 95.35352
    },
    {
        "lat": 5.58043,
        "lng": 95.35346
    },
    {
        "lat": 5.58039,
        "lng": 95.35338
    },
    {
        "lat": 5.58034,
        "lng": 95.35332
    },
    {
        "lat": 5.58023,
        "lng": 95.3532
    },
    {
        "lat": 5.57999,
        "lng": 95.35294
    },
    {
        "lat": 5.57999,
        "lng": 95.35294
    },
    {
        "lat": 5.57999,
        "lng": 95.35294
    },
    {
        "lat": 5.57982,
        "lng": 95.35274
    },
    {
        "lat": 5.57937,
        "lng": 95.35221
    },
    {
        "lat": 5.57841,
        "lng": 95.35105
    },
    {
        "lat": 5.57824,
        "lng": 95.35085
    },
    {
        "lat": 5.57804,
        "lng": 95.35061
    },
    {
        "lat": 5.57785,
        "lng": 95.35039
    },
    {
        "lat": 5.57752,
        "lng": 95.35
    },
    {
        "lat": 5.57729,
        "lng": 95.34973
    },
    {
        "lat": 5.57685,
        "lng": 95.34917
    },
    {
        "lat": 5.57666,
        "lng": 95.34897
    },
    {
        "lat": 5.57622,
        "lng": 95.34844
    },
    {
        "lat": 5.57614,
        "lng": 95.34834
    },
    {
        "lat": 5.57578,
        "lng": 95.34787
    },
    {
        "lat": 5.57538,
        "lng": 95.3474
    },
    {
        "lat": 5.57505,
        "lng": 95.34702
    },
    {
        "lat": 5.57471,
        "lng": 95.34669
    },
    {
        "lat": 5.57455,
        "lng": 95.3465
    },
    {
        "lat": 5.57443,
        "lng": 95.34638
    },
    {
        "lat": 5.5736,
        "lng": 95.34551
    },
    {
        "lat": 5.57332,
        "lng": 95.34523
    },
    {
        "lat": 5.57257,
        "lng": 95.34446
    },
    {
        "lat": 5.57241,
        "lng": 95.34429
    },
    {
        "lat": 5.57196,
        "lng": 95.34389
    },
    {
        "lat": 5.57177,
        "lng": 95.34371
    },
    {
        "lat": 5.5716,
        "lng": 95.34355
    },
    {
        "lat": 5.5713,
        "lng": 95.34323
    },
    {
        "lat": 5.57078,
        "lng": 95.34266
    },
    {
        "lat": 5.57078,
        "lng": 95.34266
    },
    {
        "lat": 5.57078,
        "lng": 95.34266
    },
    {
        "lat": 5.57042,
        "lng": 95.34226
    },
    {
        "lat": 5.5701,
        "lng": 95.34193
    },
    {
        "lat": 5.56981,
        "lng": 95.34161
    },
    {
        "lat": 5.56942,
        "lng": 95.34118
    },
    {
        "lat": 5.56913,
        "lng": 95.34089
    },
    {
        "lat": 5.56877,
        "lng": 95.34054
    },
    {
        "lat": 5.56849,
        "lng": 95.34025
    },
    {
        "lat": 5.56837,
        "lng": 95.34013
    },
    {
        "lat": 5.56821,
        "lng": 95.34
    },
    {
        "lat": 5.56787,
        "lng": 95.33972
    },
    {
        "lat": 5.56787,
        "lng": 95.33972
    },
    {
        "lat": 5.56775,
        "lng": 95.33962
    },
    {
        "lat": 5.56758,
        "lng": 95.33949
    },
    {
        "lat": 5.56741,
        "lng": 95.33933
    },
    {
        "lat": 5.56728,
        "lng": 95.33921
    },
    {
        "lat": 5.56721,
        "lng": 95.33914
    },
    {
        "lat": 5.56709,
        "lng": 95.33901
    },
    {
        "lat": 5.56679,
        "lng": 95.33869
    },
    {
        "lat": 5.56666,
        "lng": 95.33853
    },
    {
        "lat": 5.56619,
        "lng": 95.33804
    },
    {
        "lat": 5.56598,
        "lng": 95.33781
    },
    {
        "lat": 5.56555,
        "lng": 95.33736
    },
    {
        "lat": 5.56541,
        "lng": 95.33722
    },
    {
        "lat": 5.5653,
        "lng": 95.3371
    },
    {
        "lat": 5.56503,
        "lng": 95.33683
    },
    {
        "lat": 5.56496,
        "lng": 95.33674
    },
    {
        "lat": 5.56475,
        "lng": 95.33652
    },
    {
        "lat": 5.56475,
        "lng": 95.33652
    },
    {
        "lat": 5.56475,
        "lng": 95.33652
    },
    {
        "lat": 5.5646,
        "lng": 95.33636
    },
    {
        "lat": 5.56444,
        "lng": 95.33619
    },
    {
        "lat": 5.56434,
        "lng": 95.33608
    },
    {
        "lat": 5.56419,
        "lng": 95.33592
    },
    {
        "lat": 5.56377,
        "lng": 95.33547
    },
    {
        "lat": 5.56353,
        "lng": 95.33523
    },
    {
        "lat": 5.56312,
        "lng": 95.3348
    },
    {
        "lat": 5.56302,
        "lng": 95.33469
    },
    {
        "lat": 5.5625,
        "lng": 95.33414
    },
    {
        "lat": 5.56214,
        "lng": 95.33376
    },
    {
        "lat": 5.56197,
        "lng": 95.33358
    },
    {
        "lat": 5.56171,
        "lng": 95.33331
    },
    {
        "lat": 5.56019,
        "lng": 95.33171
    },
    {
        "lat": 5.55991,
        "lng": 95.33142
    },
    {
        "lat": 5.55991,
        "lng": 95.33142
    },
    {
        "lat": 5.55991,
        "lng": 95.33142
    },
    {
        "lat": 5.55928,
        "lng": 95.33075
    },
    {
        "lat": 5.55887,
        "lng": 95.33031
    },
    {
        "lat": 5.55872,
        "lng": 95.33016
    },
    {
        "lat": 5.55868,
        "lng": 95.33008
    },
    {
        "lat": 5.5586,
        "lng": 95.32989
    },
    {
        "lat": 5.55844,
        "lng": 95.32945
    },
    {
        "lat": 5.55829,
        "lng": 95.32905
    },
    {
        "lat": 5.55821,
        "lng": 95.32867
    },
    {
        "lat": 5.55812,
        "lng": 95.32755
    },
    {
        "lat": 5.55806,
        "lng": 95.32732
    },
    {
        "lat": 5.558,
        "lng": 95.32715
    },
    {
        "lat": 5.558,
        "lng": 95.32715
    },
    {
        "lat": 5.558,
        "lng": 95.32715
    },
    {
        "lat": 5.55798,
        "lng": 95.32709
    },
    {
        "lat": 5.55784,
        "lng": 95.32674
    },
    {
        "lat": 5.55752,
        "lng": 95.32591
    },
    {
        "lat": 5.5574,
        "lng": 95.32564
    },
    {
        "lat": 5.55716,
        "lng": 95.32504
    },
    {
        "lat": 5.55703,
        "lng": 95.32471
    },
    {
        "lat": 5.55678,
        "lng": 95.32406
    },
    {
        "lat": 5.55667,
        "lng": 95.32378
    },
    {
        "lat": 5.55654,
        "lng": 95.32346
    },
    {
        "lat": 5.55644,
        "lng": 95.32321
    },
    {
        "lat": 5.55632,
        "lng": 95.32291
    },
    {
        "lat": 5.55632,
        "lng": 95.32291
    },
    {
        "lat": 5.55632,
        "lng": 95.32291
    },
    {
        "lat": 5.5561,
        "lng": 95.32236
    },
    {
        "lat": 5.55602,
        "lng": 95.32217
    },
    {
        "lat": 5.55599,
        "lng": 95.32207
    },
    {
        "lat": 5.55598,
        "lng": 95.32192
    },
    {
        "lat": 5.55598,
        "lng": 95.32192
    },
    {
        "lat": 5.55596,
        "lng": 95.32191
    },
    {
        "lat": 5.55589,
        "lng": 95.32187
    },
    {
        "lat": 5.55586,
        "lng": 95.32178
    },
    {
        "lat": 5.55586,
        "lng": 95.32178
    },
    {
        "lat": 5.55525,
        "lng": 95.32145
    },
    {
        "lat": 5.55459,
        "lng": 95.32102
    },
    {
        "lat": 5.55459,
        "lng": 95.32102
    },
    {
        "lat": 5.55465,
        "lng": 95.32093
    },
    {
        "lat": 5.555,
        "lng": 95.32042
    },
    {
        "lat": 5.55504,
        "lng": 95.32038
    },
    {
        "lat": 5.55519,
        "lng": 95.32018
    },
    {
        "lat": 5.55546,
        "lng": 95.31984
    },
    {
        "lat": 5.55552,
        "lng": 95.31976
    },
    {
        "lat": 5.55558,
        "lng": 95.3197
    },
    {
        "lat": 5.55573,
        "lng": 95.31954
    },
    {
        "lat": 5.55574,
        "lng": 95.31953
    },
    {
        "lat": 5.55575,
        "lng": 95.3195
    },
    {
        "lat": 5.55575,
        "lng": 95.31949
    },
    {
        "lat": 5.55575,
        "lng": 95.31944
    },
    {
        "lat": 5.55578,
        "lng": 95.31939
    },
    {
        "lat": 5.55593,
        "lng": 95.31925
    },
    {
        "lat": 5.55603,
        "lng": 95.31915
    },
    {
        "lat": 5.55616,
        "lng": 95.31909
    },
    {
        "lat": 5.55626,
        "lng": 95.31906
    },
    {
        "lat": 5.5564,
        "lng": 95.31904
    },
    {
        "lat": 5.55645,
        "lng": 95.31904
    },
    {
        "lat": 5.55677,
        "lng": 95.31903
    },
    {
        "lat": 5.55745,
        "lng": 95.31902
    },
    {
        "lat": 5.55749,
        "lng": 95.31902
    },
    {
        "lat": 5.55754,
        "lng": 95.31903
    },
    {
        "lat": 5.55762,
        "lng": 95.31906
    },
    {
        "lat": 5.55792,
        "lng": 95.31906
    },
    {
        "lat": 5.558,
        "lng": 95.31905
    },
    {
        "lat": 5.55845,
        "lng": 95.31905
    },
    {
        "lat": 5.55864,
        "lng": 95.31904
    },
    {
        "lat": 5.55864,
        "lng": 95.31904
    },
    {
        "lat": 5.55864,
        "lng": 95.31904
    },
    {
        "lat": 5.55928,
        "lng": 95.31902
    },
    {
        "lat": 5.55962,
        "lng": 95.31901
    },
    {
        "lat": 5.55991,
        "lng": 95.31901
    },
    {
        "lat": 5.55995,
        "lng": 95.31901
    },
    {
        "lat": 5.56001,
        "lng": 95.31901
    },
    {
        "lat": 5.56001,
        "lng": 95.31901
    },
    {
        "lat": 5.56007,
        "lng": 95.31897
    },
    {
        "lat": 5.56028,
        "lng": 95.31894
    },
    {
        "lat": 5.56034,
        "lng": 95.31892
    },
    {
        "lat": 5.5604,
        "lng": 95.3189
    },
    {
        "lat": 5.56043,
        "lng": 95.31888
    },
    {
        "lat": 5.56045,
        "lng": 95.31886
    },
    {
        "lat": 5.56047,
        "lng": 95.31884
    },
    {
        "lat": 5.56048,
        "lng": 95.3188
    },
    {
        "lat": 5.56048,
        "lng": 95.31878
    },
    {
        "lat": 5.56049,
        "lng": 95.31858
    },
    {
        "lat": 5.5605,
        "lng": 95.31782
    },
    {
        "lat": 5.56049,
        "lng": 95.31771
    },
    {
        "lat": 5.56048,
        "lng": 95.31763
    },
    {
        "lat": 5.56046,
        "lng": 95.31756
    },
    {
        "lat": 5.56041,
        "lng": 95.3175
    },
    {
        "lat": 5.56037,
        "lng": 95.31743
    },
    {
        "lat": 5.56037,
        "lng": 95.31743
    },
    {
        "lat": 5.55977,
        "lng": 95.3176
    },
    {
        "lat": 5.55977,
        "lng": 95.3176
    }
]');

// var_dump($result);

$koneksi = mysqli_connect("localhost", "root", "", "coba");

for ($i = 0; $i < count($result); $i++) {
    var_dump($result[$i]);

    $now = date("Y-m-d H:i:s");
    $lat = $result[$i]->lat;
    $lng = $result[$i]->lng;
    if (!mysqli_query($koneksi, "INSERT INTO bus2 VALUES(null,'$lat','$lng','0')")) {
        echo ("Error description: " . $koneksi->error);
    }
    echo "<br>";
}

?>