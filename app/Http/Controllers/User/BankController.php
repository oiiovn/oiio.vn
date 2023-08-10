<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Bank\BankServiceInterface;
use App\Repositories\Bank\BankRepositoryInterface;
use App\Http\Request\Bank\BankRequest;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\UserBankAccount;


class BankController extends Controller
{
    protected $repositoryUser;

    public function __construct(
        UserRepositoryInterface $repositoryUser,
        BankRepositoryInterface $repository,
        BankServiceInterface $service
    ) {
        parent::__construct();

        $this->repositoryUser = $repositoryUser;

        $this->repository = $repository;

        $this->service = $service;
    }

    public function getView()
    {
        $response = Http::get('https://api.vietqr.io/v2/banks');
        $data = $response->json();
        $breeds = $data['data'];
        return [
            'index' => 'user.bank.index',
            'createStore' => 'user.info.createStore',
            'breeds' => $breeds,
        ];
    }

    public function index()
    {
        return view($this->view['index'], [
            'user' => $this->repositoryUser->findOrFail(auth()->user()->id)->load('bankAccount'),
        ]);
    }

    public function create(BankRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('user.bank.index')->with('success', __('Thêm tài khoản thành công'));
    }

    public function delete($id)
    {
        $this->service->delete($id);
        return redirect()->route('user.bank.index')->with('success', __('Xóa tài khoản thành công'));
    }
    public function createBankAccount(BankRequest $request){
        $userBankAccount = new UserBankAccount();
        $user_id =$request->input('user_id');
        $checkBankAccount =  UserBankAccount::where('user_id',$user_id)
                            ->where('bank_name', $request->input('bank_name'))
                            ->get();
        // if(!empty($checkBankAccount)){
        //     return back() -> with('error' ,'Hệ thống tồn tại ngân hàng này của bạn , bạn muốn chỉnh sửa !!!');
        // }
        $userBankAccount->user_id = $request->input('user_id'); 
        $userBankAccount->account_name = $request->input('account_name');
        $userBankAccount->account_number = $request->input('account_number');
        $userBankAccount->bank_name = $request->input('bank_name');

        $userBankAccount->save();

        return back()
            ->with('success', 'Thông tin tài khoản ngân hàng đã được thêm thành công.');
    }
}
