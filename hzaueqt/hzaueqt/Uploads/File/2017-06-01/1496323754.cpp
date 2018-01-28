/*金矿模型练习*/
#include <iostream>
using namespace std;

int n;                  //金矿数
int peopleSum;          //总人数
int peopleNeed[1001];   //每座矿需要的人数
int goldGet[1001];      //每座矿能够挖出来的金字数
int getMax[1001][1001]; //用来进行数据暂存，即i个人挖前j个金矿能够得到的最大金字数

/*
 * 函数功能：进行数据的初始化操作
 */
void init() {
    for(int i = 0; i < 1001; i++) {
        peopleNeed[i] = -1;
        goldGet[i] = -1;
    }
    for(int i = 0; i < 1001; i++)
        for(int j = 0; j < 1001; j++)
            getMax[i][j] = -1;
}

/*
 *函数功能：动态规划法求解该问题，people为剩余的人数，minnum为剩余的金矿数目
 */
int getMaxGold(int people, int minnum) {
    int maxgold = 0;    //规定返回最大的金子数目
    if(getMax[people][minnum] != -1) {
        return getMax[people][minnum];
    } else if (minnum == -1) {
        if (peopleNeed[minnum] <= people) {
            maxgold = goldGet[minnum];
        } else {
            maxgold = 0;
        }
    } else if (people >= peopleNeed[minnum]) {
        maxgold = max(getMaxGold((people-peopleNeed[minnum]), minnum-1) + goldGet[minnum], getMaxGold(people, minnum));
    } else {
        maxgold = getMaxGold(people, minnum-1);
    }

    getMax[people][minnum] = maxgold;
    return maxgold;
}

int main() {
    init();
    cin >> peopleSum >> n;
    for(int i = 0; i < n; i++)
        cin >> peopleNeed[i] >> goldGet[i];
    cout << getMaxGold(peopleSum, n-1);
    return 0;
}
