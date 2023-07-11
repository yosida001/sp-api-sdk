# Amazon Selling Partner API - PHP SDK

[オリジナルはこちら](https://github.com/amazon-php/sp-api-sdk)

## なんでフォークしたの？

あまりにも元がつかいづらい（ドキュメント通りに作られていなさすぎる）SDKだったため。\
既存の資源をそのまま使いつつなんとかするためにフォークして、私が利用するところだけ修正しました。

## 現時点での主な修正点

- FeedSDKのURI schemeは`sellingpartnerapi-na.amazon.com`固定なのにリージョンによってホストを書き換えてしまっているのを修正

…修正するごとにこのリストは増えます