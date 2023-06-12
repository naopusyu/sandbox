## 概要

Zigで`Hello World`を出す。

## 環境

- macOS Ventura

## 手順

### インストール

インストール方法は[公式サイト](https://ziglang.org/ja/learn/getting-started/)をみると色々あるようですが、
今回はHomebrewを使ってインストールしたいと思います。

```bash
brew install zig
```

インストール完了後、`zig version`を実行してみます。

```bash
zig version
0.10.1
```

この記事を書いている時点では、0.10.1が最新バージョンのようです。

### Hello World

任意の場所に、`hello_world.zig`を作成し、次の内容を書きます。

```zig:hello_world.zig
const std = @import("std");

pub fn main() void {
    std.debug.print("Hello, {s}!\n", .{"World"});
}
```

保存後、`zig run hello_world.zig`を実行する。

```bash
zig run hello_world.zig 
Hello, World!
```

無事に表示すれば成功です。

## その他

この内容はZennの[記事](https://zenn.dev/naopusyu/articles/3d824d054e648e)に書いてあります。
