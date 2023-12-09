@include('admin.layout.head')
<div class="layuimini-container">
    <div class="layuimini-main" id="app">

        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

            <form id="app-form" class="layui-form layuimini-form">

                <div class="layui-form-item">
                    <label class="layui-form-label">数据库表前缀</label>
                    <div class="layui-input-block">
                        <input type="text" name="tb_prefix" class="layui-input" lay-verify="required" placeholder="请输入" value="{{env('DB_PREFIX','')}}">
                    </div>
                    <tip></tip>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">数据库表名字</label>
                    <div class="layui-input-block">
                        <input type="text" name="tb_name" class="layui-input" lay-verify="required" placeholder="请输入:例如 test_goods" value="">
                        <tip>数据库表名字 不包含数据库表前缀。</tip>
                    </div>
                </div>

                <div class="hr-line"></div>
                <div class="layui-form-item text-center">
                    <button type="button" class="layui-btn layui-btn-normal layui-btn-sm" lay-filter="search" lay-submit="system.CurdGenerate/save?type=search" data-refresh="false">查询</button>
                </div>

            </form>

        </div>

        <div class="tableShow layui-hide">
            <blockquote class="layui-elem-quote layui-quote-nm">
                数据表：<span class="table-text"></span>
            </blockquote>
            <div class="layui-btn-container">
                <form class="layui-form layuimini-form">
                    <button type="button" class="layui-btn layui-bg-cyan" lay-filter="add" lay-submit="system.CurdGenerate/save?type=add">自动生成CURD</button>
                    <button type="button" class="layui-btn layui-bg-red" lay-filter="delete" lay-submit="system.CurdGenerate/save?type=delete">删除CURD对应的文件</button>
                </form>
                <div class="file-list layui-elem-quote">还未生成任何文件</div>
            </div>
            <table id="currentTable" class="layui-table" lay-filter="currentTable"></table>
        </div>
    </div>
</div>
@include('admin.layout.foot')
