## これはなに?

[Google データ エクスポート](https://takeout.google.com/) で 自分が購読しているPodcastの一覧をエクスポートできる。  
それを Markdown のリスト形式に変換できるスクリプトです。

## 使い方

このリポジトリのトップにファイルをコピーしてきて、ソースコードの `$path` を修正する

```php
$path = './example.opml'; // ここを直す
```

```sh
# example.opml を以下のように出力してくれる
$ php main.php
- [Pod de Engineer](https://anchor.fm/s/12948d58/podcast/rss)
- [Rebuild.fm](https://feeds.rebuild.fm/rebuildfm)
- [resize.fm](https://anchor.fm/s/416f2048/podcast/rss)
```

これで Markdown の形式で出力してくれます。
