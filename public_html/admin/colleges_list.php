<?php 
    include 'inc/config/config.php';
?>
<?php include ROOT . 'include/header.php'; ?>

<div id="pad-wrapper">
    <div class="table-wrapper products-table section">
        <div class="row head">
            <div class="col-md-12">
                <h4>Products</h4>
            </div>
        </div>

        <div class="row filter-block">
            <div class="pull-right">
                <div class="ui-select">
                    <select>
                      <option>Filter users</option>
                      <option>Signed last 30 days</option>
                      <option>Active users</option>
                    </select>
                </div>
                <input type="text" class="search">
                <a class="btn-flat success new-product">+ Add product</a>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-md-3">
                            <input type="checkbox">
                            Product
                        </th>
                        <th class="col-md-3">
                            <span class="line"></span>Description
                        </th>
                        <th class="col-md-3">
                            <span class="line"></span>Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row -->
                    <tr class="first">
                        <td>
                            <input type="checkbox">
                            <div class="img">
                                <img src="img/table-img.png">
                            </div>
                            <a href="#" class="name">Generate Lorem </a>
                        </td>
                        <td class="description">
                            if you are going to use a passage of Lorem Ipsum.
                        </td>
                        <td>
                            <span class="label label-success">Active</span>
                            <ul class="actions">
                                <li><a href="#">Edit</a></li>
                                <li class="last"><a href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <input type="checkbox">
                            <div class="img">
                                <img src="img/table-img.png">
                            </div>
                            <a href="#" class="name">Internet tend</a>
                        </td>
                        <td class="description">
                            There are many variations of passages.
                        </td>
                        <td>
                            <ul class="actions">
                                <li><a href="#">Edit</a></li>
                                <li class="last"><a href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <input type="checkbox">
                            <div class="img">
                                <img src="img/table-img.png">
                            </div>
                            <a href="#" class="name">Generate Lorem </a>
                        </td>
                        <td class="description">
                            if you are going to use a passage of Lorem Ipsum.
                        </td>
                        <td>
                            <ul class="actions">
                                <li><a href="#">Edit</a></li>
                                <li class="last"><a href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <input type="checkbox">
                            <div class="img">
                                <img src="img/table-img.png">
                            </div>
                            <a href="#" class="name">Internet tend</a>
                        </td>
                        <td class="description">
                            There are many variations of passages.
                        </td>
                        <td>
                            <span class="label label-info">Standby</span>
                            <ul class="actions">
                                <li><a href="#">Edit</a></li>
                                <li class="last"><a href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox">
                            <div class="img">
                                <img src="img/table-img.png">
                            </div>
                            <a href="#" class="name">Generate Lorem </a>
                        </td>
                        <td class="description">
                            if you are going to use a passage of Lorem Ipsum.
                        </td>
                        <td>
                            <span class="label label-success">Active</span>
                            <ul class="actions">
                                <li><a href="#">Edit</a></li>
                                <li class="last"><a href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ROOT . 'include/footer.php'; ?>