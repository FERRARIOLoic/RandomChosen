<main class='container-fluid'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite text_blue"><?= $page_title; ?></div>
    </div>

    <?php
    //!------------- CHOICES VALIDADE ---------//
    if (empty($action_choices) or $action_choices != 'choices_validated' or !empty($errors)) {
    ?>
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-12 col-lg-11">
                <form action="choix_simple.html" method="post" class="row box_category d-flex justify-content-evenly">
                    <input type="hidden" name="action_choices" value="choices_validated">
                    <div class="col-12 col-lg-11 fw-bold text-center text-lg-start">
                        <div class="row">
                            <div class="col-12 mt-5 fs-3">
                                Liste des choix :
                            </div>
                            <div class="col-12">
                                <span class="fst-italic fs-8 text_blue">2 choix minimum, lettres et chiffres uniquement</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_1" placeholder="Choix 1" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_1) ? $choice_1 : ''; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_2" placeholder="Choix 2" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_2) ? $choice_2 : ''; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_3" placeholder="Choix 3" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_3) ? $choice_3 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_4" placeholder="Choix 4" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_4) ? $choice_4 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_5" placeholder="Choix 5" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_5) ? $choice_5 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_6" placeholder="Choix 6" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_6) ? $choice_6 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_7" placeholder="Choix 7" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_7) ? $choice_7 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <input type="text" class="form-control" name="choice_8" placeholder="Choix 8" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_8) ? $choice_8 : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="c col-lg-3ol-12 py-2">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-11">
                            <input type="text" class="form-control" name="choice_9" placeholder="Choix 9" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_9) ? $choice_9 : ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 py-2">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-11">
                            <input type="text" class="form-control" name="choice_10" placeholder="Choix 10" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_10) ? $choice_10 : ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 py-2">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-11">
                            <input type="text" class="form-control" name="choice_11" placeholder="Choix 11" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_11) ? $choice_11 : ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 py-2">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-11">
                            <input type="text" class="form-control" name="choice_12" placeholder="Choix 12" pattern="[\p{L}\p{N} '\-]+$" title="Utilisez uniquement des lettres et des chiffres" value="<?= isset($choice_12) ? $choice_12 : ''; ?>">
                        </div>
                    </div>
                </div> -->

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <button type="submit" class="btn_valid btn">Valider mes choix</button>
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
            var data = <?= json_encode(
                            $data ?? [],
                            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                        ); ?>;
        </script>

        <div class="row d-flex justify-content-evenly">
            <div id="chart" class="col-12 col-md-4 pt-5 text-center text-md-end swirl_in_fwd"></div>
            <div id="question" class="col-12 col-md-6 pt-3 pt-lg-5 text-center text-md-start align-self-center">
                <h1></h1>
            </div>
            <div class="col-12 text-center fs-7 fst-italic text_blue mt-3 mb-5">
                Cliquez sur la roue pour lancer la sélection
            </div>

            <div class="col-12">
                <form action="choix_simple.html" method="post" class="row d-flex justify-content-center align-items-center">
                    <input type="hidden" name="choice_1" value="<?= htmlspecialchars($data[0]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_2" value="<?= htmlspecialchars($data[1]['question'], ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_3" value="<?= htmlspecialchars($data[2]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_4" value="<?= htmlspecialchars($data[3]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_5" value="<?= htmlspecialchars($data[4]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_6" value="<?= htmlspecialchars($data[5]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_7" value="<?= htmlspecialchars($data[6]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <input type="hidden" name="choice_8" value="<?= htmlspecialchars($data[7]['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
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




        <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>

        <script type="text/javascript" charset="utf-8">
            var padding = {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                w = 300 - padding.left - padding.right,
                h = 300 - padding.top - padding.bottom,
                r = Math.min(w, h) / 2,
                rotation = 0,
                oldrotation = 0,
                picked = 100000,
                oldpick = [],
                color = d3.scale.category20();

            var svg = d3.select('#chart')
                .append("svg")
                .data([data])
                .attr("width", w + padding.left + padding.right)
                .attr("height", h + padding.top + padding.bottom)
                .style("overflow", "visible");


            /*
             * CONTENEUR PRINCIPAL
             * Permet de centrer la roue
             */
            var container = svg.append("g")
                .attr("class", "chartholder")
                .attr(
                    "transform",
                    "translate(" +
                    (w / 2 + padding.left) +
                    "," +
                    (h / 2 + padding.top) +
                    ")"
                );


            /*
             * GROUPE POUR L'ANIMATION D'APPARITION
             */
            var animatedWheel = container.append("g");


            /*
             * GROUPE QUI CONTIENT LA ROUE
             * C'est celui-ci qui tournera lors du clic
             */
            var vis = animatedWheel.append("g");


            /*
             * ANIMATION D'APPARITION
             *
             * La roue commence petite et à -540°
             * puis revient à 0° et à sa taille normale.
             */
            vis
                .attr("transform", "rotate(-540) scale(0)")
                .style("opacity", 0)
                .transition()
                .duration(600)
                .ease("cubic-in-out")
                .attr("transform", "rotate(0) scale(1)")
                .style("opacity", 1);


            /*
             * PIE
             */
            var pie = d3.layout.pie()
                .sort(null)
                .value(function(d) {
                    return 1;
                });


            /*
             * ARC
             */
            var arc = d3.svg.arc()
                .outerRadius(r);


            /*
             * CREATION DES PARTS
             */
            var arcs = vis.selectAll("g.slice")
                .data(pie)
                .enter()
                .append("g")
                .attr("class", "slice");


            /*
             * COULEUR DES PARTS
             */
            arcs.append("path")
                .attr("fill", function(d, i) {
                    return color(i);
                })
                .attr("d", function(d) {
                    return arc(d);
                });


            /*
             * FLECHE
             */
            svg.append("path")
                .attr("d", "M 308 150 L 330 142 L 330 158 Z")
                .style("fill", "#0A6496")
                .style(
                    "filter",
                    "drop-shadow(1px 2px 2px rgba(0,0,0,0.25))"
                );


            /*
             * TEXTE
             */
            arcs.append("text")
                .attr("transform", function(d) {

                    d.innerRadius = 0;
                    d.outerRadius = r;
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

                    var words = data[i].label.split(/\s+/);

                    var lines = [];
                    var currentLine = "";

                    // Nombre maximum approximatif de caractères par ligne
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

                    // Hauteur entre les lignes
                    var lineHeight = 13;

                    // Centrage vertical du texte
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


            container.on("click", spin);

            function spin(d) {

                container.on("click", null);

                if (oldpick.length == data.length) {

                    console.log("done");

                    container.on("click", null);

                    return;
                }


                console.log(
                    "OldPick: " + oldpick.length,
                    "Data length: " + data.length
                );


                var ps = 360 / data.length,
                    pieslice = Math.round(1440 / data.length),
                    rng = Math.floor(
                        (Math.random() * 1440) + 360
                    );


                rotation =
                    Math.round(rng / ps) * ps;


                picked =
                    Math.round(
                        data.length -
                        (rotation % 360) / ps
                    );


                picked =
                    picked >= data.length ?
                    (picked % data.length) :
                    picked;

                if (oldpick.indexOf(picked) !== -1) {

                    d3.select(this).call(spin);

                    return;
                } else {

                    oldpick.push(picked);
                }


                rotation +=
                    90 - Math.round(ps / 2);

                vis.transition()
                    .duration(3000)
                    .attrTween("transform", rotTween)
                    .each("end", function() {

                        d3.select(
                                ".slice:nth-child(" +
                                (picked + 1) +
                                ") path"
                            )
                            .attr("fill", "#111");

                        d3.select("#question h1")
                            .text(data[picked].question);

                        oldrotation = rotation;

                        container.on("click", spin);

                    });
            }

            container.append("circle")
                .attr("cx", 0)
                .attr("cy", 0)
                .attr("r", 10)
                .style({
                    "fill": "black",
                    "cursor": "pointer"
                });

            function rotTween(to) {

                var i = d3.interpolate(
                    oldrotation % 360,
                    rotation
                );

                return function(t) {

                    return "rotate(" + i(t) + ")";
                };
            }


            function getRandomNumbers() {

                var array = new Uint16Array(1000);

                var scale = d3.scale.linear()
                    .range([360, 1440])
                    .domain([0, 100000]);


                if (
                    window.hasOwnProperty("crypto") &&
                    typeof window.crypto.getRandomValues === "function"
                ) {

                    window.crypto.getRandomValues(array);

                    console.log("works");

                } else {

                    for (var i = 0; i < 1000; i++) {

                        array[i] =
                            Math.floor(
                                Math.random() * 100000
                            ) + 1;
                    }
                }


                return array;
            }
        </script>
        </div>
    <?php } ?>




</main>