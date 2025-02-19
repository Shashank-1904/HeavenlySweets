<div class="products_meta d-flex align-items-center">
                                                                <div>
                                                                    <span class="price text-primary fw-semibold">$<?= $product['product_price'] ?></span>
                                                                    <span class="count">x <?= $product['productqty'] ?></span>
                                                                    <?php
                                                                    $number = (int) filter_var($product['productqty'], FILTER_SANITIZE_NUMBER_INT);
                                                                    $singletotal = $product['product_price'] * $number;
                                                                    $total += $singletotal;
                                                                    ?>
                                                                    <span class="count">= <?= $singletotal ?></span>
                                                                </div>
                                                            </div>