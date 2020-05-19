<template>
  <div class="tabs">
    <div class="tab-contents">
        <!-- v-for for-in文 -->
        <!-- :key v-bind:keyの省略形、ループした要素にそれぞれkeyを割り当てる
        v-forを使用する場合は基本的にkeyを割り当てる -->
        <!-- :class v-bind:classの省略形、クラス属性を付与する 
        {クラス名: true/false}でtrueの場合は付与、そうで無い場合は付与されない
        []をつけることで複数のクラスを付与することができる-->
        <!-- @click クリックされた時のアクション、今回はTabNumの値をkeyに更新している -->
      <a v-for="(value, key) in tabs"
              :key="value.id"
              :class="['tab-btn',{ active: TabNum === key }]"
              @click="TabNum = key">{{ value.tabName }}</a>
    </div>
    <div class="tab-content">
      <!-- v-show="true/false" v-showの中身がtrueなら表示,falseなら表示しない -->
      <div v-show="TabNum === 0">
        <p>サンプル１</p>
      </div>
      <div v-show="TabNum === 1">
        <p>サンプル２</p>
      </div>
      <div v-show="TabNum === 2">
        <p>サンプル３</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  // data オブジェクトの設定をする場所
  // ,(カンマ)で区切って複数の値を入れることができる
  // 変数の定義みたいなもの
  // [] 配列
  // {} 連想配列 key : value の形で書く
  data () {
    return {
      TabNum: 0,
      tabs: [
        {id: 1, tabName: '野菜'},
        {id: 2, tabName: '果物'},
        {id: 3, tabName: '飲料'}
      ],
    }
  }
}  
</script>