<main class='container-fluid'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite"><?= $page_title; ?></div>
    </div>

    <?php
    //!------------- CHOICES VALIDADE ---------//
    if (empty($action_choices) or $action_choices != 'choices_validated' or !empty($errors)) {
    ?>
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-12 col-lg-11">
                <form action="choix_double.html" method="post" class="row box_category d-flex justify-content-evenly">
                    <div class="col-12">
                        <div class="row">

                            <input type="hidden" name="action_choices" value="choices_validated">
                            <div class="col-12 col-lg-11 p-3 box_category_title text-center text-lg-start">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-12 col-lg-11 mt-5 fs-3">
                                        Liste des premiers choix :
                                    </div>
                                    <div class="col-12 col-lg-11">
                                        <span class="fst-italic fs-8">2 choix minimum, lettres et chiffres uniquement</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_1" placeholder="Choix 1" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_1) ? $choice_1_1 : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_2" placeholder="Choix 2" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_2) ? $choice_1_2 : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_3" placeholder="Choix 3" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_3) ? $choice_1_3 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_4" placeholder="Choix 4" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_4) ? $choice_1_4 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_5" placeholder="Choix 5" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_5) ? $choice_1_5 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_6" placeholder="Choix 6" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_6) ? $choice_1_6 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_7" placeholder="Choix 7" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_7) ? $choice_1_7 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_1_8" placeholder="Choix 8" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1_8) ? $choice_1_8 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-11 p-3 box_category_title text-center text-lg-start">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-12 col-lg-11 mt-5 fs-3">
                                        Liste des seconds choix :
                                    </div>
                                    <div class="col-12 col-lg-11">
                                        <span class="fst-italic fs-8">2 choix minimum, lettres et chiffres uniquement</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_1" placeholder="Choix 1" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_1) ? $choice_2_1 : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_2" placeholder="Choix 2" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_2) ? $choice_2_2 : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_3" placeholder="Choix 3" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_3) ? $choice_2_3 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_4" placeholder="Choix 4" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_4) ? $choice_2_4 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_5" placeholder="Choix 5" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_5) ? $choice_2_5 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_6" placeholder="Choix 6" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_6) ? $choice_2_6 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_7" placeholder="Choix 7" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_7) ? $choice_2_7 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 py-2">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="choice_2_8" placeholder="Choix 8" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2_8) ? $choice_2_8 : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center py-3">
                                        <button type="submit" class="btn_valid btn">Valider mes choix</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>



    <?php
    //!------------- CIRCLE OF SELECTION -------------//
    if (!empty($action_choices) and $action_choices == 'choices_validated' and empty($errors)) {
    ?>

        <script>
            var data_1 = <?= json_encode(
                                $data_1 ?? [],
                                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                            ) ?>;

            var data_2 = <?= json_encode(
                                $data_2 ?? [],
                                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                            ) ?>;
        </script>
        <div class="row d-flex justify-content-evenly">
            <div class="col-12 col-lg-6">
                <div class="row d-flex justify-content-evenly">
                    <div id="chart_1" class="col-12 col-md-5 pt-5 text-center text-md-end swirl_in_fwd"></div>
                    <div id="question_1" class="col-12 col-md-6 pt-3 pt-lg-5 text-center text-md-start align-self-center">
                        <h1></h1>
                    </div>
                    <div class="col-12 col-md-5 text-center fs-7 fst-italic mt-3 mb-5">
                        Cliquez sur la roue pour lancer la sélection
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row d-flex justify-content-evenly">
                    <div id="chart_2" class="col-12 col-md-5 pt-5 text-center text-md-end swirl_in_fwd"></div>
                    <div id="question_2" class="col-12 col-md-6 pt-3 pt-lg-5 text-center text-md-start align-self-center">
                        <h1></h1>
                    </div>
                    <div class="col-12 col-md-5 text-center fs-7 fst-italic mt-3 mb-5">
                        Cliquez sur la roue pour lancer la sélection
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>



            <div class="col-12">
                <form action="choix_double.html" method="post" class="row d-flex justify-content-center align-items-center">
                    <input type="hidden" name="choice_1_1" value="<?= htmlspecialchars($data_1[0]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_2" value="<?= htmlspecialchars($data_1[1]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_3" value="<?= htmlspecialchars($data_1[2]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_4" value="<?= htmlspecialchars($data_1[3]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_5" value="<?= htmlspecialchars($data_1[4]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_6" value="<?= htmlspecialchars($data_1[5]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_7" value="<?= htmlspecialchars($data_1[6]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_1_8" value="<?= htmlspecialchars($data_1[7]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_1" value="<?= htmlspecialchars($data_2[0]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_2" value="<?= htmlspecialchars($data_2[1]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_3" value="<?= htmlspecialchars($data_2[2]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_4" value="<?= htmlspecialchars($data_2[3]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_5" value="<?= htmlspecialchars($data_2[4]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_6" value="<?= htmlspecialchars($data_2[5]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_7" value="<?= htmlspecialchars($data_2[6]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2_8" value="<?= htmlspecialchars($data_2[7]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <div class="col-12 col-lg-4 py-2 text-center">
                        <button type="submit" class="btn_valid btn" name="action_choices" value="choices_validated">Recommencer</button>
                    </div>
                    <div class="col-12 col-lg-4 py-2 text-center">
                        <button type="submit" class="btn_valid btn" name="action_choices" value="choices_modify">Modifier mes choix</button>
                    </div>
                    <div class="col-12 col-lg-4 py-2 text-center">
                        <?php
                        if (empty($_SESSION['user'])) { ?>
                            <a href="connexion.html">Se connecter pour enregistrer mes choix</a>
                        <?php } else { ?>
                            <button type="submit" class="btn_valid btn" name="action_choices" value="choices_registered">Enregistrer mes choix</button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>


        <!-- ============================================================= -->
        <!-- DONNÉES PHP → JAVASCRIPT -->
        <!-- ============================================================= -->

        <script>
            var data_1 = <?= json_encode(
                                $data_1 ?? [],
                                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                            ) ?>;

            var data_2 = <?= json_encode(
                                $data_2 ?? [],
                                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                            ) ?>;
        </script>


        <!-- ============================================================= -->
        <!-- D3 -->
        <!-- ============================================================= -->

        <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>


        <script type="text/javascript">
            //
            // ================================================================
            // ROUE 1
            // ================================================================
            //

            var padding_1 = {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },

                w_1 = 300,
                h_1 = 300,

                r_1 = Math.min(w_1, h_1) / 2,

                rotation_1 = 0,
                oldrotation_1 = 0,

                picked_1 = 100000,
                oldpick_1 = [],

                color_1 = d3.scale.category20();


            //
            // SVG
            //

            var svg_1 = d3.select("#chart_1")
                .append("svg")
                .attr(
                    "width",
                    w_1 + padding_1.left + padding_1.right
                )
                .attr(
                    "height",
                    h_1 + padding_1.top + padding_1.bottom
                )
                .style("overflow", "visible");


            //
            // Groupe principal
            //

            var container_1 = svg_1.append("g")
                .attr("class", "chartholder_1")
                .attr(
                    "transform",
                    "translate(" +
                    (w_1 / 2 + padding_1.left) +
                    "," +
                    (h_1 / 2 + padding_1.top) +
                    ")"
                );


            //
            // Groupe pour l'animation d'entrée
            //

            var animatedWheel_1 = container_1.append("g");


            //
            // Groupe qui tourne réellement
            //

            var vis_1 = animatedWheel_1.append("g");


            //
            // ================================================================
            // ANIMATION D'ENTRÉE
            // ================================================================
            //

            animatedWheel_1
                .attr(
                    "transform",
                    "rotate(-540) scale(0)"
                )
                .style("opacity", 0)
                .transition()
                .duration(600)
                .ease("cubic-in-out")
                .attr(
                    "transform",
                    "rotate(0) scale(1)"
                )
                .style("opacity", 1);


            //
            // ================================================================
            // PIE
            // ================================================================
            //

            var pie_1 = d3.layout.pie()
                .sort(null)
                .value(function(d) {
                    return 1;
                });


            //
            // ARC
            //

            var arc_1 = d3.svg.arc()
                .outerRadius(r_1);


            //
            // ================================================================
            // SLICES
            // ================================================================
            //

            var arcs_1 = vis_1.selectAll("g.slice")
                .data(pie_1(data_1))
                .enter()
                .append("g")
                .attr("class", "slice");


            //
            // Couleur des slices
            //

            arcs_1.append("path")
                .attr("fill", function(d, i) {
                    return color_1(i);
                })
                .attr("d", function(d) {
                    return arc_1(d);
                });


            //
            // ================================================================
            // TEXTES DE LA ROUE 1
            // ================================================================
            //

            arcs_1.append("text")
                .attr("transform", function(d) {

                    d.innerRadius = 0;
                    d.outerRadius = r_1;
                    d.angle = (d.startAngle + d.endAngle) / 2;

                    return "rotate(" +
                        (d.angle * 180 / Math.PI - 90) +
                        ")translate(" +
                        (d.outerRadius * 0.65) +
                        ")";

                })
                .attr("text-anchor", "middle")
                .style("font-size", "14px")
                .style("font-weight", "bold")
                .each(function(d, i) {

                    var text = d3.select(this);

                    var words = data_1[i].label.split(/\s+/);

                    var lines = [];
                    var currentLine = "";

                    var maxChars = 12;


                    words.forEach(function(word) {

                        var testLine = currentLine ?
                            currentLine + " " + word :
                            word;

                        if (
                            testLine.length > maxChars &&
                            currentLine !== ""
                        ) {

                            lines.push(currentLine);

                            currentLine = word;

                        } else {

                            currentLine = testLine;

                        }

                    });


                    if (currentLine !== "") {
                        lines.push(currentLine);
                    }


                    var lineHeight = 13;

                    var startY = -((lines.length - 1) * lineHeight) / 2;


                    lines.forEach(function(line, index) {

                        text.append("tspan")
                            .attr("x", 0)
                            .attr(
                                "y",
                                startY + (index * lineHeight)
                            )
                            .text(line);

                    });

                });


            //
            // ================================================================
            // FLÈCHE ROUE 1
            // ================================================================
            //

            svg_1.append("path")
                .attr(
                    "d",
                    "M 308 150 L 330 142 L 330 158 Z"
                )
                .style("fill", "#0A6496")
                .style(
                    "filter",
                    "drop-shadow(1px 2px 2px rgba(0,0,0,0.25))"
                );


            //
            // ================================================================
            // CENTRE ROUE 1
            // ================================================================
            //

            container_1.append("circle")
                .attr("cx", 0)
                .attr("cy", 0)
                .attr("r", 10)
                .style("fill", "black");


            //
            // ================================================================
            // CLICK ROUE 1
            // ================================================================
            //

            container_1.on("click", spin_1);


            //
            // ================================================================
            // SPIN ROUE 1
            // ================================================================
            //

            function spin_1() {

                container_1.on("click", null);


                //
                // Tous les choix ont déjà été tirés
                //

                if (oldpick_1.length == data_1.length) {

                    container_1.on("click", spin_1);

                    return;
                }


                //
                // Taille d'une part
                //

                var ps = 360 / data_1.length;


                //
                // Rotation aléatoire
                //

                var rng =
                    Math.floor(
                        (Math.random() * 1440) + 360
                    );


                rotation_1 =
                    Math.round(rng / ps) * ps;


                //
                // Choix sélectionné
                //

                picked_1 =
                    Math.round(
                        data_1.length -
                        (rotation_1 % 360) / ps
                    );


                if (picked_1 >= data_1.length) {

                    picked_1 =
                        picked_1 % data_1.length;

                }


                //
                // Évite de sélectionner deux fois le même choix
                //

                if (oldpick_1.indexOf(picked_1) !== -1) {

                    container_1.on("click", spin_1);

                    spin_1();

                    return;
                }


                oldpick_1.push(picked_1);


                //
                // Positionnement final
                //

                rotation_1 +=
                    90 - Math.round(ps / 2);


                //
                // Animation
                //

                vis_1
                    .transition()
                    .duration(3000)
                    .attrTween(
                        "transform",
                        rotTween_1
                    )
                    .each("end", function() {


                        //
                        // Met le choix sélectionné en noir
                        //

                        vis_1
                            .select(
                                ".slice:nth-child(" +
                                (picked_1 + 1) +
                                ") path"
                            )
                            .attr("fill", "#111");


                        //
                        // Affiche la question
                        //

                        d3.select("#question_1 h1")
                            .text(
                                data_1[picked_1].question
                            );


                        //
                        // Sauvegarde la rotation
                        //

                        oldrotation_1 = rotation_1;


                        //
                        // Réactive le click
                        //

                        container_1.on(
                            "click",
                            spin_1
                        );

                    });

            }


            //
            // ================================================================
            // ROTATION ROUE 1
            // ================================================================
            //

            function rotTween_1() {

                var i =
                    d3.interpolate(
                        oldrotation_1 % 360,
                        rotation_1
                    );

                return function(t) {

                    return "rotate(" + i(t) + ")";

                };

            }


            //
            // ================================================================
            // ROUE 2
            // ================================================================
            //

            var padding_2 = {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },

                w_2 = 300,
                h_2 = 300,

                r_2 = Math.min(w_2, h_2) / 2,

                rotation_2 = 0,
                oldrotation_2 = 0,

                picked_2 = 100000,
                oldpick_2 = [],

                color_2 = d3.scale.category20();


            //
            // SVG
            //

            var svg_2 = d3.select("#chart_2")
                .append("svg")
                .attr(
                    "width",
                    w_2 + padding_2.left + padding_2.right
                )
                .attr(
                    "height",
                    h_2 + padding_2.top + padding_2.bottom
                )
                .style("overflow", "visible");


            //
            // Groupe principal
            //

            var container_2 = svg_2.append("g")
                .attr("class", "chartholder_2")
                .attr(
                    "transform",
                    "translate(" +
                    (w_2 / 2 + padding_2.left) +
                    "," +
                    (h_2 / 2 + padding_2.top) +
                    ")"
                );


            //
            // Groupe pour l'animation d'entrée
            //

            var animatedWheel_2 = container_2.append("g");


            //
            // Groupe qui tourne réellement
            //

            var vis_2 = animatedWheel_2.append("g");


            //
            // ================================================================
            // ANIMATION D'ENTRÉE
            // ================================================================
            //

            animatedWheel_2
                .attr(
                    "transform",
                    "rotate(-540) scale(0)"
                )
                .style("opacity", 0)
                .transition()
                .duration(600)
                .ease("cubic-in-out")
                .attr(
                    "transform",
                    "rotate(0) scale(1)"
                )
                .style("opacity", 1);


            //
            // ================================================================
            // PIE
            // ================================================================
            //

            var pie_2 = d3.layout.pie()
                .sort(null)
                .value(function(d) {
                    return 1;
                });


            //
            // ARC
            //

            var arc_2 = d3.svg.arc()
                .outerRadius(r_2);


            //
            // ================================================================
            // SLICES
            // ================================================================
            //

            var arcs_2 = vis_2.selectAll("g.slice")
                .data(pie_2(data_2))
                .enter()
                .append("g")
                .attr("class", "slice");


            //
            // Couleur des slices
            //

            arcs_2.append("path")
                .attr("fill", function(d, i) {
                    return color_2(i);
                })
                .attr("d", function(d) {
                    return arc_2(d);
                });


            //
            // ================================================================
            // TEXTES DE LA ROUE 2
            // ================================================================
            //

            arcs_2.append("text")
                .attr("transform", function(d) {

                    d.innerRadius = 0;
                    d.outerRadius = r_2;
                    d.angle = (d.startAngle + d.endAngle) / 2;

                    return "rotate(" +
                        (d.angle * 180 / Math.PI - 90) +
                        ")translate(" +
                        (d.outerRadius * 0.65) +
                        ")";

                })
                .attr("text-anchor", "middle")
                .style("font-size", "14px")
                .style("font-weight", "bold")
                .each(function(d, i) {

                    var text = d3.select(this);

                    var words = data_2[i].label.split(/\s+/);

                    var lines = [];
                    var currentLine = "";

                    var maxChars = 12;


                    words.forEach(function(word) {

                        var testLine = currentLine ?
                            currentLine + " " + word :
                            word;

                        if (
                            testLine.length > maxChars &&
                            currentLine !== ""
                        ) {

                            lines.push(currentLine);

                            currentLine = word;

                        } else {

                            currentLine = testLine;

                        }

                    });


                    if (currentLine !== "") {
                        lines.push(currentLine);
                    }


                    var lineHeight = 13;

                    var startY = -((lines.length - 1) * lineHeight) / 2;


                    lines.forEach(function(line, index) {

                        text.append("tspan")
                            .attr("x", 0)
                            .attr(
                                "y",
                                startY + (index * lineHeight)
                            )
                            .text(line);

                    });

                });


            //
            // ================================================================
            // FLÈCHE ROUE 2
            // ================================================================
            //

            svg_2.append("path")
                .attr(
                    "d",
                    "M 308 150 L 330 142 L 330 158 Z"
                )
                .style("fill", "#0A6496")
                .style(
                    "filter",
                    "drop-shadow(1px 2px 2px rgba(0,0,0,0.25))"
                );


            //
            // ================================================================
            // CENTRE ROUE 2
            // ================================================================
            //

            container_2.append("circle")
                .attr("cx", 0)
                .attr("cy", 0)
                .attr("r", 10)
                .style("fill", "black");


            //
            // ================================================================
            // CLICK ROUE 2
            // ================================================================
            //

            container_2.on("click", spin_2);


            //
            // ================================================================
            // SPIN ROUE 2
            // ================================================================
            //

            function spin_2() {

                container_2.on("click", null);


                //
                // Tous les choix ont déjà été tirés
                //

                if (oldpick_2.length == data_2.length) {

                    container_2.on("click", spin_2);

                    return;
                }


                //
                // Taille d'une part
                //

                var ps = 360 / data_2.length;


                //
                // Rotation aléatoire
                //

                var rng =
                    Math.floor(
                        (Math.random() * 1440) + 360
                    );


                rotation_2 =
                    Math.round(rng / ps) * ps;


                //
                // Choix sélectionné
                //

                picked_2 =
                    Math.round(
                        data_2.length -
                        (rotation_2 % 360) / ps
                    );


                if (picked_2 >= data_2.length) {

                    picked_2 =
                        picked_2 % data_2.length;

                }


                //
                // Évite les doublons
                //

                if (oldpick_2.indexOf(picked_2) !== -1) {

                    container_2.on("click", spin_2);

                    spin_2();

                    return;
                }


                oldpick_2.push(picked_2);


                //
                // Positionnement final
                //

                rotation_2 +=
                    90 - Math.round(ps / 2);


                //
                // Animation
                //

                vis_2
                    .transition()
                    .duration(3000)
                    .attrTween(
                        "transform",
                        rotTween_2
                    )
                    .each("end", function() {


                        //
                        // Met le choix sélectionné en noir
                        //

                        vis_2
                            .select(
                                ".slice:nth-child(" +
                                (picked_2 + 1) +
                                ") path"
                            )
                            .attr("fill", "#111");


                        //
                        // Affiche la question
                        //

                        d3.select("#question_2 h1")
                            .text(
                                data_2[picked_2].question
                            );


                        //
                        // Sauvegarde la rotation
                        //

                        oldrotation_2 = rotation_2;


                        //
                        // Réactive le click
                        //

                        container_2.on(
                            "click",
                            spin_2
                        );

                    });

            }


            //
            // ================================================================
            // ROTATION ROUE 2
            // ================================================================
            //

            function rotTween_2() {

                var i =
                    d3.interpolate(
                        oldrotation_2 % 360,
                        rotation_2
                    );

                return function(t) {

                    return "rotate(" + i(t) + ")";

                };

            }
        </script>


    <?php } ?>
</main>