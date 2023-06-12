## 概要

Rustで`Hello World`を出す。

## 環境

- macOS Ventura

## 手順

### インストール

[公式](https://www.rust-lang.org/ja/tools/install)に書いてあるインストールコマンドを実行します。

```sh
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
```

コマンド実行後、途中で下記を聞かれるので`1`を選択します。

```sh
1) Proceed with installation (default)
2) Customize installation
3) Cancel installation
```

インストールが終わったら環境変数にパスを通します。

```sh
$ source "$HOME/.cargo/env"
```

インストールが完了すると、`cargo`, `rustc`, `rustup`の3つのツールが使えるようになるので、
試しにバージョンが表示してみます。
※2023/03/22に実行したときのバージョンです。

```sh
$ cargo --version
cargo 1.68.0 (115f34552 2023-02-26)
```

```sh
$ rustc --version
rustc 1.68.0 (2c8cc3432 2023-03-06)
```

```sh
$ rustup --version
rustup 1.25.2 (17db695f1 2023-02-01)
info: This is the version for the rustup toolchain manager, not the rustc compiler.
info: The currently active `rustc` version is `rustc 1.68.0 (2c8cc3432 2023-03-06)`
```

### Hello World

任意の場所に`hello_world.rs`ファイルを作成する。  
作成したファイルに次の内容を書きます。

```rust
fn main () {
  println!("Hello World");
}
```

書き込んだらコンパイルしてみます。

```sh
$ rustc hello_world.rs
```

コンパイルが成功すると、`hello_world.rs`と同じ場所に`hello_world`が出来上がります。

```
$ ls
$ hello_world	hello_world.rs
```

出来ていれば、実行します。

```
$ ./hello_world
$ Hello World ← これ実行結果
```

## その他

この内容はZennの[記事](https://zenn.dev/naopusyu/articles/7770418150d7a1)に書いてあります。
