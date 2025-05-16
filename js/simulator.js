// 車種別車検基本料金
var arrayModel = [
  // クイック料金, プレミアム料金
  [44040, 51840], // 軽自動車
  [53950, 61750], // 小型乗用車
  [62150, 69950], // 中型乗用車
  [70350, 78150] // 大型乗用車
];

// 割引メニュー(複数選択可)
var arrayQuickDiscountList = [
  // クイック料金, プレミアム料金
  [1100, 1100], // web予約
  [1100, 1100], // リピーター
  [1100, 1100], // 紹介
  [1250, 1250], // シニア
  [0, 5500] // 新車
];

// 割引メニュー(プレミアム車検:単一選択)
var arrayDiscountSingle = [
  3300, // 早期（3ヶ月前）
  2200, // 早期（2ヶ月前）
  1100 // 早期（1ヶ月前）
];

// オプション料金
var arrayOption = [
  // よく選ばれるオプションセット, スペシャルオプションセット
  [11640, 32540], // 軽自動車
  [11640, 33640], // 小型乗用車
  [11640, 33640], // 中型乗用車
  [13840, 33640] // 大型乗用車
];

// コンポーネント モーダル:よく選ばれるオプションセット
Vue.component('nomal-modal', {
  template: '<div class="modal" v-on:click="clickEvent">' +
    '<div class="modal__inner inner-m" v-on:click="stopEvent">' +
    '<div class="modal__box">' +
    '<h2 class="modal__h1">よく選ばれるオプションセット</h2>' +
    '<table class="table">' +
    '<tr>' +
    '<td class="table__ttl">ブレーキフルード</td>' +
    '<td class="table__txt">空気中の水分を含んで汚れてきます、2年毎の交換になります。</td>' +
    '<td class="table__num"><span><slot name="other"></slot><slot name="large"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ワイパーゴム左右交換<br>（工賃込み）</td>' +
    '<td class="table__txt">フロントガラスのワイパーゴムを左右交換します。雨の日でも視界良好です。</td>' +
    '<td class="table__num"><span>2,840</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">冷却水リカバリー</td>' +
    '<td class="table__txt">エンジンを冷やす専用液、減っている冷却水を補充し性能を復活させます。</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)</td>' +
    '</tr>' +
    '<tr class="table__total">' +
    '<td class="table__ttl table__ttl--ex">セット合計</td>' +
    '<td class="table__num table__num--ex" colspan="2"><span><slot name="other2"></slot><slot name="large2"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '</table>' +
    '<p class="modal__note">上記は概算料金となり、お車の車種や年式により異なります。詳しくはスタッフまでお問い合わせください。</p>' +
    '<button v-on:click="clickEvent" class="modal__btn"></button>' +
    '</div>' +
    '</div>' +
    '</div>',
  methods: {
    clickEvent: function () {
      this.$emit('from-child');
    },
    stopEvent: function () {
      // グレー部分、閉じるボタン以外のクリックアクションを伝えない
      event.stopPropagation();
    }
  }
});

// コンポーネント アコーディオン:よく選ばれるオプションセット
Vue.component('nomal-accordion', {
  template: '<div class="modal__box">' +
    '<h2 class="modal__h1">よく選ばれるオプションセット</h2>' +
    '<table class="table">' +
    '<tr>' +
    '<td class="table__ttl">ブレーキフルード</td>' +
    '<td class="table__num"><span><slot name="other"></slot><slot name="large"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">空気中の水分を含んで汚れてきます、2年毎の交換になります。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ワイパーゴム左右交換<br>（工賃込み）</td>' +
    '<td class="table__num"><span>2,840</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">フロントガラスのワイパーゴムを左右交換します。雨の日でも視界良好です。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">冷却水リカバリー</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">エンジンを冷やす専用液、減っている冷却水を補充し性能を復活させます。</td>' +
    '</tr>' +
    '<tr class="table__total">' +
    '<td class="table__ttl table__ttl--ex">セット合計</td>' +
    '<td class="table__num table__num--ex"><span><slot name="other2"></slot><slot name="large2"></slot></span>円(税込)</td>' +
    '</tr>' +
    '</table>' +
    '<p class="modal__note">上記は概算料金となり、お車の車種や年式により異なります。詳しくはスタッフまでお問い合わせください。</p>' +
    '<button v-on:click="clickEvent" class="option__btn option__btn--ex">閉じる<i class="fas fa-times"></i></button>' +
    '</div>',
  methods: {
    clickEvent: function () {
      this.$emit('from-child');
    }
  }
});

// コンポーネント モーダル:スペシャルオプションセット
Vue.component('special-modal', {
  template: '<div class="modal" v-on:click="clickEvent">' +
    '<div class="modal__inner modal__inner--long inner-m" v-on:click="stopEvent">' +
    '<div class="modal__box">' +
    '<h2 class="modal__h1">スペシャルオプションセット</h2>' +
    '<table class="table">' +
    '<tr>' +
    '<td class="table__ttl">ブレーキフルード</td>' +
    '<td class="table__txt">空気中の水分を含んで汚れてきます、2年毎の交換になります。</td>' +
    '<td class="table__num"><span>5,500</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ワイパーゴム左右交換<br>（工賃込み）</td>' +
    '<td class="table__txt">フロントガラスのワイパーゴムを左右交換します。雨の日でも視界良好です。</td>' +
    '<td class="table__num"><span>2,840</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">冷却水リカバリー</td>' +
    '<td class="table__txt">エンジンを冷やす専用液、減っている冷却水を補充し性能を復活させます。</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エアコンフィルター交換</td>' +
    '<td class="table__txt">車外からホコリ等をシャットアウト。空気を綺麗にします。</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エアーエレメント交換</td>' +
    '<td class="table__txt">エンジンを守る空気のフィルター、定期的な交換を致します。</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">オートマチックフルード</td>' +
    '<td class="table__txt">２万キロ走行したオイルは鉄粉などで大変汚れます！性能低下前に交換します。</td>' +
    '<td class="table__num"><span><slot name="light"></slot><slot name="other"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">CPU診断</td>' +
    '<td class="table__txt">最近の車はコンピューター制御、CPUチェックで早期不具合発見できます。</td>' +
    '<td class="table__num"><span>2,200</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エンジン内部洗浄</td>' +
    '<td class="table__txt">エンジンの中は汚れたオイルの塊が出来ます、定期的なエンジン内部の洗浄を行えます。</td>' +
    '<td class="table__num"><span>2,200</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ヘッドライトコーティング</td>' +
    '<td class="table__txt">曇ったヘッドライトを磨いて綺麗にし、コーティング施工します。</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr class="table__total">' +
    '<td class="table__ttl table__ttl--ex">セット合計</td>' +
    '<td class="table__num table__num--ex" colspan="2"><span><slot name="light2"></slot><slot name="other2"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '</table>' +
    '<p class="modal__note">上記は概算料金となり、お車の車種や年式により異なります。詳しくはスタッフまでお問い合わせください。</p>' +
    '<button v-on:click="clickEvent" class="modal__btn"></button>' +
    '</div>' +
    '</div>' +
    '</div>',
  methods: {
    clickEvent: function () {
      this.$emit('from-child');
    },
    stopEvent: function () {
      // グレー部分、閉じるボタン以外のクリックアクションを伝えない
      event.stopPropagation();
    }
  }
});

// コンポーネント アコーディオン:スペシャルオプションセット
Vue.component('special-accordion', {
  template: '<div class="modal__box">' +
    '<h2 class="modal__h1">スペシャルオプションセット</h2>' +
    '<table class="table">' +
    '<tr>' +
    '<td class="table__ttl">ブレーキフルード</td>' +
    '<td class="table__num"><span>5,500</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">空気中の水分を含んで汚れてきます、2年毎の交換になります。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ワイパーゴム左右交換<br>（工賃込み）</td>' +
    '<td class="table__num"><span>2,840</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">フロントガラスのワイパーゴムを左右交換します。雨の日でも視界良好です。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">冷却水リカバリー</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">エンジンを冷やす専用液、減っている冷却水を補充し性能を復活させます。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エアコンフィルター交換</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">車外からホコリ等をシャットアウト。空気を綺麗にします。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エアーエレメント交換</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">エンジンを守る空気のフィルター、定期的な交換を致します。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">オートマチックフルード</td>' +
    '<td class="table__num"><span><slot name="light"></slot><slot name="other"></slot></span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">２万キロ走行したオイルは鉄粉などで大変汚れます！性能低下前に交換します。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">CPU診断</td>' +
    '<td class="table__num"><span>2,200</span>円(税込)</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">最近の車はコンピューター制御、CPUチェックで早期不具合発見できます。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">エンジン内部洗浄</td>' +
    '<td class="table__num"><span>2,200</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">エンジンの中は汚れたオイルの塊が出来ます、定期的なエンジン内部の洗浄を行えます。</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__ttl">ヘッドライトコーティング</td>' +
    '<td class="table__num"><span>3,300</span>円(税込)〜</td>' +
    '</tr>' +
    '<tr>' +
    '<td class="table__txt" colspan="2">曇ったヘッドライトを磨いて綺麗にし、コーティング施工します。</td>' +
    '</tr>' +
    '<tr class="table__total">' +
    '<td class="table__ttl table__ttl--ex">セット合計</td>' +
    '<td class="table__num table__num--ex"><span><slot name="light2"></slot><slot name="other2"></slot></span>円(税込)</td>' +
    '</tr>' +
    '</table>' +
    '<p class="modal__note">上記は概算料金となり、お車の車種や年式により異なります。詳しくはスタッフまでお問い合わせください。</p>' +
    '<button v-on:click="clickEvent" class="option__btn option__btn--ex">閉じる<i class="fas fa-times"></i></button>' +
    '</div>',
  methods: {
    clickEvent: function () {
      this.$emit('from-child');
    }
  }
});

// 料金シミュレーション、ボタン制御、表示制御
var app1 = new Vue({
  el: '#app1',
  data: {
    carmodel: 0, // 選択結果：車種
    couseplan: 0, // 選択結果：プラン
    quickDiscount: [], // 選択結果：クイック割引メニュー
    premiumDiscountMulti: [], // 選択結果：プレミアム割引メニュー（複数）
    premiumDiscountSingle: [], // 選択結果：プレミアム割引メニュー（単一）
    option: -1, // 選択結果：オプション
    models: [{
        name: '軽自動車',
        value: 1
      },
      {
        name: '小型乗用車',
        value: 2
      },
      {
        name: '中型乗用車',
        value: 3
      },
      {
        name: '大型乗用車',
        value: 4
      },
    ], // 表示一覧：車種
    discountList: [{
        name: 'オンライン予約割引',
        value: 1,
        id: 'multi01',
        text: 'Webサイトからご予約をいただくと1,000円引'
      },
      {
        name: 'リピーター割引',
        value: 2,
        id: 'multi02',
        text: '同じ車両で2回以上ご利用の方は、1,000円引'
      },
      {
        name: '紹介割引',
        value: 3,
        id: 'multi03',
        text: '紹介した方も、された方も、何度でも1,100円引'
      },
      {
        name: 'シニア割引',
        value: 4,
        id: 'multi04',
        text: '65歳以上の方は、1,250円引'
      },
      {
        name: '新車割引（初割）',
        value: 5,
        id: 'multi05',
        text: '新車から初めての車検で、5,500円引'
      }
    ], // 表示一覧：割引メニュー（複数選択）
    discountSingleList: [{
        name: '早期予約割引（3ヶ月前）',
        value: 1,
        text: '車検満了3ヶ月以上前のお申し込みで、3,300円引'
      },
      {
        name: '早期予約割引（2ヶ月前）',
        value: 2,
        text: '車検満了2ヶ月以上前のお申し込みで、2,200円引'
      },
      {
        name: '早期予約割引（1ヶ月前）',
        value: 3,
        text: '車検満了1ヶ月以上前のお申し込みで、1,100円引'
      }
    ], // 表示一覧：プレミアム割引メニュー（単一選択）
    normalOptionTotal: 11640, // オプションボタン内の表示金額：よく選ばれるオプションセット
    specialOptionTotal: 32540, // オプションボタン内の表示金額：スペシャルオプションセット
    planBtnDisabled: true, // フラグ：車検コースボタン選択可否
    quickBtnDisabled: true, // フラグ：クイックボタン選択可否
    optionBtnDisabled: true, // フラグ：オプションボタン選択可否
    showQuick: true, // フラグ：クイック車検一覧表示
    showPremium: false, // フラグ：プレミアム車検一覧表示
    isActive: false, // アコーディオン用フラグ：よく選ばれるオプションセット
    isOpened: false,
    isActive02: false, // アコーディオン用フラグ：スペシャルオプションセット
    isOpened02: false
  },
  computed: {
    // 戻り値：車検料金
    shaken: function () {
      var result = 0,
        model = this.carmodel - 1, // 車種
        plan = this.couseplan - 1; // プラン

      if (model >= 0 && plan >= 0) {

        result = arrayModel[model][plan];

        this.normalOptionTotal = arrayOption[model][0],
          this.specialOptionTotal = arrayOption[model][1];

      }
      return result;
    },

    // 戻り値：クイック車検割引 合計
    totalQuickDiscount: function () {

      var result = 0,
        model = this.carmodel - 1, // 車種
        plan = this.couseplan - 1; // プラン

      this.quickDiscount.forEach(function (item) {

        result = result + arrayQuickDiscountList[item - 1][plan];

      });

      return result;

    },

    // 戻り値：プレミアム車検割引（複数選択） 合計
    totalPremiumDiscountMulti: function () {

      var result = 0,
        plan = this.couseplan - 1; // プラン

      this.premiumDiscountMulti.forEach(function (item) {

        result = result + arrayQuickDiscountList[item - 1][plan];

      });

      return result;

    },

    // 戻り値：プレミアム車検割引（単一選択） 合計
    totalPremiumDiscountSingle: function () {

      var selectedItem = this.premiumDiscountSingle - 1,
        result = 0;

      if (selectedItem >= 0) {
        result = arrayDiscountSingle[selectedItem];
      }

      return result;

    },

    // 戻り値：割引合計
    discounttotal: function () {
      var result = 0;

      if (this.couseplan === 1) {
        // クイック車検選択時
        result = this.totalQuickDiscount;

      } else if (this.couseplan > 1) {
        // プレミアム車検選択時
        result = this.totalPremiumDiscountMulti + this.totalPremiumDiscountSingle;
      }

      if (result !== 0) {
        result = result * -1;
      }

      return result;
    },

    // 戻り値：オプション金額
    optiontotal: function () {
      var result = 0,
        model = this.carmodel - 1, // 車種
        plan = this.couseplan - 1, // プラン
        option = this.option - 1; // オプション

      if (model >= 0 && plan >= 0) {
        if (option >= 0) {
          result = arrayOption[model][option];
        } else {
          result = 0;
        }
      }

      return result;
    },

    // 戻り値：見積もり合計
    total: function () {
      return this.shaken + this.optiontotal + this.discounttotal;
    },

    // フラグ：大型乗用車か否か
    showLargeModelOnly: function () {
      return (this.carmodel === 4) ? true : false;
    },

    // フラグ：軽自動車か否か
    showLightModelOnly: function () {
      var model = 0;

      if (this.carmodel <= 1) {
        model = 1;
      } else {
        model = this.carmodel;
      }

      return (model === 1) ? true : false;
    }
  },
  methods: {
    modelBtnActive: function () {
      // 車種選択後、コースプラン選択可能に変更
      this.planBtnDisabled = false
    },
    outputSelectedOption: function () {
      // オプションボタン内の表示金額を変更する関数
      var model = this.carmodel - 1;

      if (model >= 0) {
        this.normalOptionTotal = arrayOption[model][0],
          this.specialOptionTotal = arrayOption[model][1];
      }
    },
    quickBtnActive: function () {
      // クイック車検選択時
      this.showQuick = true,
        this.showPremium = false,
        this.quickBtnDisabled = false,
        this.optionBtnDisabled = false,
        this.premiumDiscountMulti = [], // プレミアム車検割引のデータをリセット
        this.premiumDiscountSingle = [], // プレミアム車検割引のデータをリセット
        this.outputSelectedOption(); // 表示中のオプション金額変更
    },
    premiumBtnActive: function () {
      // プレミアム車検選択時
      this.showQuick = false,
        this.showPremium = true,
        this.optionBtnDisabled = false,
        this.quickDiscount = [], // クイック車検割引のデータをリセット
        this.outputSelectedOption(); // 表示中のオプション金額変更
    },
    toggleAccordion: function () {
      // アコーディオン:よく選ばれるオプションセット
      this.isOpened = !this.isOpened,
        this.isActive = !this.isActive;
    },
    toggleAccordion02: function () {
      // アコーディオン:スペシャルオプションセット
      this.isOpened02 = !this.isOpened02,
        this.isActive02 = !this.isActive02;
    },
    // アコーディオン スライドアップ・ダウン制御 ここから
    beforeEnter: function (el) {
      el.style.height = '0';
    },
    enter: function (el) {
      el.style.height = el.scrollHeight + 'px';
    },
    beforeLeave: function (el) {
      el.style.height = el.scrollHeight + 'px';
    },
    leave: function (el) {
      el.style.height = '0';
    }
    // アコーディオン スライドアップ・ダウン制御 ここまで
  }
});

// 見積もり内容表示
var app4 = new Vue({
  el: '#app4',
  methods: {
    // 戻り値：車種名
    model: function () {
      var result = '軽自動車',
        model = app1.carmodel;

      if (model > 0) {

        var target = app1.models.filter(function (el) {
          return el.value === model
        });

        result = target[0].name;
      }

      return result;
    },
    // 戻り値：車検料金
    shaken: function () {
      return app1.shaken;
    },
    // 戻り値：割引合計
    discounttotal: function () {
      return app1.discounttotal;
    },
    // 戻り値：オプション金額
    optiontotal: function () {
      return app1.optiontotal;
    },
    // 戻り値：見積もり合計
    total: function () {
      return app1.total;
    }
  }
});

// モーダル:よく選ばれるオプションセット制御
var app2 = new Vue({
  el: '#app2',
  data: {
    showContents: false
  },
  computed: {
    // フラグ：大型乗用車か否か
    showLargeModelOnly: function () {
      return (app1.carmodel === 4) ? true : false;
    }
  },
  methods: {
    openModal: function () {
      this.showContents = true
    },
    closeModal: function () {
      this.showContents = false
    }
  }
});

// モーダル:スペシャルオプションセット制御
var app3 = new Vue({
  el: '#app3',
  data: {
    showContents: false
  },
  computed: {
    // フラグ：軽自動車か否か
    showLightModelOnly: function () {
      var model = 0;

      if (app1.carmodel <= 1) {
        model = 1;
      } else {
        model = app1.carmodel;
      }

      return (model === 1) ? true : false;
    }
  },
  methods: {
    openModal: function () {
      this.showContents = true
    },
    closeModal: function () {
      this.showContents = false
    }
  }
});