# md5_collision
在init.txt中填入你想要碰撞的字符串，例
```
1123131
```
在PHP环境下输入
```
php md5collision.php
```
输出
```
MD5 collision generator v1.5
by Marc Stevens (http://www.win.tue.nl/hashclash/)
Using output filenames: '1.txt' and '2.txt'
Using prefixfile: 'init.txt'
Using initial value: 6bb58e85e7c5411648d44a509e17e462
Generating first block: .....
Generating second block: S00............
Running time: 1.537 s
文件1的哈希值: 7a40d1b1c9fabbd37d872d19e0283ebe
文件1的 URL 编码: 1123131%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%A8%95%ADQ%98%25%40.%02%BAB%04%9F%13%40%F9%8D8%8A%3CrC%E7%CCd%DA%3E%CD%8A%0C%AC%02%AB%9D%B0%D6%F2H%E6oo+%DF%DC+%9A%A4J8%DC%C4_%80C%FE%25%B7S%B6%8F%5BO%3ExLE%F7a%D6%96%D7%B6%F1%97a%7D9%91%B4%ED%B4pm%E6.5%A1%18%CD7%F6%C4Y%1AY%AE%BD%60%D6%01%3F%D7%82%00s%A8%D1%EF%C4%82Hl%C2%C8%04F%3D%89%0C%25%A3%19%8F%98%80%F6y%ED
文件1 URL 编码的哈希值: dc5f494da137bf1f28c42044cef897ed
文件2的哈希值: 7a40d1b1c9fabbd37d872d19e0283ebe
文件2的 URL 编码: 1123131%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%A8%95%ADQ%98%25%40.%02%BAB%04%9F%13%40%F9%8D8%8A%BCrC%E7%CCd%DA%3E%CD%8A%0C%AC%02%AB%9D%B0%D6%F2H%E6oo+%DF%DC+%1A%A5J8%DC%C4_%80C%FE%25%B7S%B6%0F%5BO%3ExLE%F7a%D6%96%D7%B6%F1%97a%7D9%91%B4%ED%B4pmf.5%A1%18%CD7%F6%C4Y%1AY%AE%BD%60%D6%01%3F%D7%82%00s%A8%D1%EF%C4%02Hl%C2%C8%04F%3D%89%0C%25%A3%19%8F%18%80%F6y%ED
文件2 URL 编码的哈希值: fc44bd248c0e657504985d3be51a8db6
```
