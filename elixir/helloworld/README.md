## 概要

Elixirで`Hello World`を出す。

## 環境

- macOS Ventura

## 手順

### インストール

[サイト](https://elixir-lang.org/install.html)をみるといくつかやり方が書いてありますが、
macOSを使っているので、`Homebrew`を使ってインストールをします。

```bash
$ brew install elixir
```

インストールが終わったら、`elixir --version`を実行してみます。

```bash
$ elixir --version
Erlang/OTP 25 [erts-13.2.2.1] [source] [64-bit] [smp:8:8] [ds:8:8:10] [async-threads:1] [jit] [dtrace]

Elixir 1.14.5 (compiled with Erlang/OTP 25)
```

これを書いている時点では、1.14.5が最新バージョンのようです。
※2023/06/13時点

### Hello World

`iex`, `elixir`, `elixirc`の３つのコマンドを使って、`Hello World`を出してみます。

#### インタラクティヴ・モード

`iex`コマンドを実行して、インタラクティヴ・モードを起動し、IOモジュールを使って標準出力してみます。

```bash
$ iex
Erlang/OTP 25 [erts-13.2.2.1] [source] [64-bit] [smp:8:8] [ds:8:8:10] [async-threads:1] [jit] [dtrace]

Interactive Elixir (1.14.5) - press Ctrl+C to exit (type h() ENTER for help)
iex(1)> IO.puts "Hello world"
Hello world
:ok
iex(2)> 
```

#### スクリプトの実行

任意の場所に`hello_world.exs`を作成し、次の内容を書きます。
（スクリプトで実行する場合は拡張子を`exs`にするようです）

```elixir
IO.puts "Hello world"
```

`elixir`コマンドを使って実行します。

```bash
$ elixir hello_world.exs 
Hello world
```

#### コンパイルからの実行

任意の場所に`hello_world.ex`を作成し、次の内容を書きます。
（コンパイルする場合は拡張子を`ex`にするようです）

```elixir
defmodule Hello do
    def world do
        IO.puts "Hello world"
    end
end
```

`elixirc`コマンドを使って実行すると、`Elixir.Hello.beam`ファイルが作成されます。

```bash
$ elixirc hello_world.ex

$ ls 
Elixir.Hello.beam	hello_world.ex
```

`Elixir.Hello.beam`は次のように`elixir -e モジュール名.関数名`で実行可能です。

```bash
$ elixir -e Hello.world
Hello world
```

## その他

この内容はZennの[記事](https://zenn.dev/naopusyu/articles/4c83d5746fe491)に書いてあります。
